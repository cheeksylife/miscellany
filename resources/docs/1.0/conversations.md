# Conversations

---

- [Conversations](#conversations)
  - [All Conversations](#all-conversations)
    - [Results](#results)
    - [Filters](#filters)
  - [Conversation](#conversation)
    - [Results](#results-1)
  - [Conversation Participants](#conversation-participants)
    - [Results](#results-2)
  - [Conversation Messages](#conversation-messages)
    - [Results](#results-3)
  - [Create a Conversation](#create-a-conversation)
    - [Body](#body)
    - [Results](#results-4)
  - [Update a Conversation](#update-a-conversation)
    - [Body](#body-1)
    - [Results](#results-5)
  - [Delete a Conversation](#delete-a-conversation)
    - [Results](#results-6)

<a name="all-conversations"></a>
## All Conversations

You can get a list of all the conversations of a campaign by using the following endpoint.

> {warning} Don't forget that all endpoints documented here need to be prefixed with `api/{{version}}/campaigns/{campaign.id}/`.


| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `conversations` | Default |

### Results
```json
{
    "data": [
         {
                "id": 1,
                "name": "Bob's Tavern",
                "entry": null,
                "image": "conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef.jpeg",
                "image_full": "http://kanka.loc/storage/conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef.jpeg",
                "image_thumb": "http://kanka.loc/storage/conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef_thumb.jpeg",
                "is_closed": false,
                "is_private": false,
                "entity_id": 335,
                "tags": [],
                "created_at":  "2019-01-30T00:01:44.000000Z",
                "created_by": 1,
                "updated_at":  "2019-08-29T13:48:54.000000Z",
                "updated_by": 1,
                "type": "In Game",
                "target": "members",
                "participants": 3,
                "messages": 6
            },
    ]
}
```

<a name="filters"></a>
## Filters

The list of returned conversations can be filtered. The available filters are available here: <a href="/en/helpers/api-filters?type=conversation" target="_blank">API filters</a>.

<a name="conversation"></a>
## Conversation

To get the details of a single conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `conversations/{conversation.id}` | Default |

### Results
```json
{
    "data": {
        "id": 1,
        "name": "Bob's Tavern",
        "entry": null,
        "image": "conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef.jpeg",
        "image_full": "http://kanka.loc/storage/conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef.jpeg",
        "image_thumb": "http://kanka.loc/storage/conversations/ORn3vytRVIGkWHAAfdLqgf4xN9NHdtgjRxQbf0ef_thumb.jpeg",
        "is_closed": false,
        "is_private": false,
        "entity_id": 335,
        "tags": [],
        "created_at":  "2019-01-30T00:01:44.000000Z",
        "created_by": 1,
        "updated_at":  "2019-08-29T13:48:54.000000Z",
        "updated_by": 1,
        "type": "In Game",
        "target": "members",
        "participants": 3,
        "messages": 6
    },

}
```


<a name="conversation-participants"></a>
## Conversation Participants

To get the participants of an conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `conversations/{conversation.id}/conversation_participants` | Default |

### Results
```json
{
    "data": [
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": null,
            "user_id": 1
        },
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": null,
            "user_id": 31
        },
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": null,
            "user_id": 2
        }
    ]
}
```

> {info} Adding (`POST`), Updating (`PUT`, `PATCH`) and Deleting (`DELETE`) a participant from an conversation can also be done using the same patterns as for other endpoints.


<a name="conversation-messages"></a>
## Conversation Messages

To get the messages of an conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `conversations/{conversation.id}/conversation_messages` | Default |

### Results
```json
{
    "data": [
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": 63,
            "user_id": null,
            "message": "Hey! I'm thirsty."
        },
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": null,
            "user_id": null,
            "message": "Wadayawant?"
        },
        {
            "conversation_id": 1,
            "created_by": null,
            "character_id": 70,
            "user_id": null,
            "message": "Cookies!"
        },
    ]
}
```

> {info} Adding (`POST`), Updating (`PUT`, `PATCH`) and Deleting (`DELETE`) a messages from an conversation can also be done using the same patterns as for other endpoints.


<a name="create-conversation"></a>
## Create a Conversation

To create a conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| POST | `conversations` | Default |

### Body

| Parameter | Type | Detail |
| :- |   :-   |  :-  |
| `name` | `string` (Required) | Name of the conversation |
| `type` | `string` | Type of conversation |
| `target` | `string` | Available options: `users` and `characters`  |
| `tags` | `array` | Array of tag ids |
| `is_closed` | `boolean` | If the conversation is closed |
| `is_private` | `boolean` | If the conversation is only visible to `admin` members of the campaign |
| `image_url` | `string` | URL to a picture to be used for the conversation |

### Results

> {success} Code 200 with JSON body of the new conversation.


<a name="update-conversation"></a>
## Update a Conversation

To update a conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| PUT/PATCH | `conversations/{conversation.id}` | Default |

### Body

The same body parameters are available as for when creating a conversation.

### Results

> {success} Code 200 with JSON body of the updated conversation.


<a name="delete-conversation"></a>
## Delete a Conversation

To delete a conversation, use the following endpoint.

| Method | Endpoint| Headers |
| :- |   :-   |  :-  |
| DELETE | `conversations/{conversation.id}` | Default |

### Results

> {success} Code 200 with JSON.
