@php
/**
 * @var \App\Models\MiscModel $model
 * @var \App\Models\Entity $entity
 * @var \App\Models\EntityNote $note
 * @var \Illuminate\Database\Eloquent\Collection $pinnedNotes
 */
if (empty($entity)) {
    $entity = $model->entity;
}
$wrapper = false;
$entryShown = false;
if (!isset($pinnedNotes)) {
    $pinnedNotes = $entity->notes()->with(['permissions', 'location', 'creator', 'editor'])->ordered()->paginate(15);
    $wrapper = true;
}

$first = $pinnedNotes->first();
@endphp

@if(isset($withEntry) && ($pinnedNotes->count() === 0 || (!empty($first) && $first->position >= 0)))
    @include('entities.components.entry')
    @php $entryShown = true; @endphp
@endif


@if($wrapper)
<div class="entity-notes">
@endif
    @foreach ($pinnedNotes as $note)
        @if (isset($withEntry) && !$entryShown && $note->position >= 0)
            @include('entities.components.entry')
            @php $entryShown = true @endphp
        @endif

        @include('entities.components._note')
    @endforeach


    @if (isset($withEntry) && !$entryShown)
        @include('entities.components.entry')
        @php $entryShown = true @endphp
    @endif

    @if ($pinnedNotes->currentPage() < $pinnedNotes->lastPage())
        <div class="text-center">
            <a href="#" class="btn btn-default btn-lg story-load-more" data-url="{{ route('entities.story.load-more', [$entity, 'page' => $pinnedNotes->currentPage() + 1]) }}">
                <i class="fas fa-plus"></i> {{ __('entities/story.actions.load_more') }}
            </a>

            <i class="fa fa-spinner fa-spin fa-2x" id="story-more-spinner" style="display: none"></i>
        </div>
    @endif

@if($wrapper)
</div>
@endif
