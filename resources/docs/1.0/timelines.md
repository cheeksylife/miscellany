# Timelines

---

- [All Timelines](#all-timelines)
- [Filters](#filters)
- [Single Timeline](#timeline)
- [Create a Timeline](#create-timeline)
- [Update a Timeline](#update-timeline)
- [Delete a Timeline](#delete-timeline)
- [Eras](#era)
- [Elements](#element)

<a name="all-timelines"></a>
## All Timelines

You can get a list of all the timelines of a campaign by using the following endpoint.

> {warning} Don't forget that all endpoints documented here need to be prefixed with `api/{{version}}/campaigns/{campaign.id}/`.


| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `timelines` | Default |

### Results
```json
{
    "data": [
        {
            "id": 1,
            "name": "Thaelian Timeline",
            "entry": "\n<p>Lorem Ipsum</p>\n",
            "image": "{path}",
            "image_full": "{url}",
            "image_thumb": "{url}",
            "has_custom_image": false,
            "is_private": false,
            "entity_id": 112,
            "tags": [],
            "created_at": "2019-01-28T06:29:29.000000Z",
            "created_by": 1,
            "updated_at": "2020-01-30T17:30:52.000000Z",
            "updated_by": 1,
            "type": "Primary",
            "revert_order": false,
            "eras": [
              {
                "name": "Anno Domani",
                "abbreviation": "AD",
                "start_year": 0,
                "end_year": null,
                "elements": []
              },
              {
                "name": "Before Christ",
                "abbreviation": "BC",
                "start_year": null,
                "end_year": 0,
                "elements": []
              }
            ]
        }
    ],
    "links": {
        "first": "https://kanka.io/api/{{version}}/campaigns/1/timelines?page=1",
        "last": "https://kanka.io/api/{{version}}/campaigns/1/timelines?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "https://kanka.io/api/{{version}}/campaigns/1/timelines",
        "per_page": 100,
        "to": 1,
        "total": 1
    }
}
```

<a name="filters"></a>
## Filters

The list of returned timelines can be filtered. The available filters are available here: <a href="/en/helpers/api-filters?type=timeline" target="_blank">API filters</a>.

<a name="timeline"></a>
## Timeline

To get the details of a single timeline, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `timelines/{timeline.id}` | Default |

### Results
```json
{
    "data": {
        "id": 1,
        "name": "Thaelian Timeline",
        "entry": "\n<p>Lorem Ipsum</p>\n",
        "image": "{path}",
        "image_full": "{url}",
        "image_thumb": "{url}",
        "has_custom_image": false,
        "is_private": false,
        "entity_id": 112,
        "tags": [],
        "created_at": "2019-01-28T06:29:29.000000Z",
        "created_by": 1,
        "updated_at": "2020-01-30T17:30:52.000000Z",
        "updated_by": 1,
        "type": "Primary",
        "revert_order": false,
        "eras": [
          {
            "name": "Anno Domani",
            "abbreviation": "AD",
            "start_year": 0,
            "end_year": null,
            "elements": []
          },
          {
            "name": "Before Christ",
            "abbreviation": "BC",
            "start_year": null,
            "end_year": 0,
            "elements": []
          }
        ]
    }

}
```


<a name="create-timeline"></a>
## Create a Timeline

To create a timeline, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| POST | `timelines` | Default |

### Body

| Parameter | Type | Detail |
| :- |   :-   |  :-  |
| `name` | `string` (Required) | Name of the timeline |
| `entry` | `string` | The html description of the timeline |
| `type` | `string` | The timeline's type |
| `revert_order` | `boolean` | Revert era rendering order (older first) |
| `tags` | `array` | Array of tag ids |
| `is_private` | `boolean` | If the timeline is only visible to `admin` members of the campaign |
| `image_url` | `string` | URL to a picture to be used for the timeline |

### Results

> {success} Code 200 with JSON body of the new timeline.


<a name="update-timeline"></a>
## Update a Timeline

To update a timeline, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| PUT/PATCH | `timelines/{timeline.id}` | Default |

### Body

The same body parameters are available as for when creating a timeline.

### Results

> {success} Code 200 with JSON body of the updated timeline.


<a name="delete-timeline"></a>
## Delete a Timeline

To delete a timeline, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| DELETE | `timelines/{timeline.id}` | Default |

### Results

> {success} Code 200 with JSON.

<a name="era"></a>
## Timeline Eras

You can control the era of the timeline with the following docs: [Timeline Era](/docs/{{version}}/timeline-eras)

<a name="element"></a>
## Timeline Elements

You can control the elements of the timeline with the following docs: [Timeline Element](/docs/{{version}}/timeline-elements)
