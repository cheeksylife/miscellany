<?php /** @var \App\Models\AppRelease $model */ ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th>{{ __('admin/releases.fields.name') }}</th>
        <th>{{ __('admin/releases.fields.category') }}</th>
        <th>{{ __('admin/releases.fields.visibility') }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($models as $model)
        <tr>
            <td>
                <a href="{{ route('admin.app-releases.edit', $model) }}">{{ $model->name }}</a><br />
                <p class="help-block">{{ $model->excerpt }}</p>
            </td>
            <td>
                {{ $model->category() }}
            </td>
            <td>
                {{ $model->visibility() }}
            </td>
            <td>
                <a href="{{ route('admin.app-releases.edit', $model) }}">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

