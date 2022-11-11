### version 1

- [ ] crud article
- [ ] crud course
- [ ] crud episode

# Table: article

- `Name`: articles

## `Columns[]`

| `Name `      | `Type`             | `Nullable` | `Default` | `Comment`            |
|--------------|--------------------|------------|-----------|----------------------|
| id           | int auto_increment | `false`    |           |                      |
| user_id      | int                | `false`    |           |                      |
| title        | varchar(100)       | `false`    |           |                      |
| slug         | varchar(150)       | `false`    |           |                      |
| description  | text               | `true`     |           |                      |
| body         | text               | `true`     |           |                      |
| imageUrl     | varchar(100)       | `true`     |           |                      |
| tags         | array              | `false`    |           |                      |
| viewCount    | int                | `false`    |     0     |                      |
| commentCount | int                | `false`    |     0     |                      |

# Table: course

- `Name`: courses

## `Columns[]`

| `Name `      | `Type`             | `Nullable` | `Default`  | `Comment`            |
|--------------|--------------------|------------|------------|----------------------|
| id           | int auto_increment | `false`    |            |                      |
| user_id      | int                | `false`    |            |                      |
| type         | varchar(100)       | `false`    |            |                      |
| title        | varchar(100)       | `false`    |            |                      |
| slug         | varchar(150)       | `false`    |            |                      |
| description  | text               | `true`     |            |                      |
| body         | text               | `true`     |            |                      |
| price        | varchar(50)        | `true`     | 0          |                      |
| time         | time               | `true`     | "00:00:00" |                      |
| imageUrl     | varchar(100)       | `true`     |            |                      |
| viewCount    | int                | `false`    | 0          |                      |
| commentCount | int                | `false`    | 0          |                      |

# Table: episode

- `Name`: episodes

## `Columns[]`

| `Name `      | `Type`             | `Nullable` | `Default`  | `Comment`            |
|--------------|--------------------|------------|------------|----------------------|
| id           | int auto_increment | `false`    |            |                      |
| course_id    | int                | `false`    |            |                      |
| type         | varchar(100)       | `false`    |            |                      |
| title        | varchar(100)       | `false`    |            |                      |
| slug         | varchar(150)       | `false`    |            |                      |
| description  | text               | `true`     |            |                      |
| body         | text               | `true`     |            |                      |
| price        | varchar(50)        | `true`     | 0          |                      |
| time         | time               | `true`     | "00:00:00" |                      |
| imageUrl     | varchar(100)       | `true`     |            |                      |
| videoUrl     | varchar(100)       | `true`     |            |                      |
| viewCount    | int                | `false`    | 0          |                      |
| number       | int                | `false`    | 0          |                      |
| commentCount | int                | `false`    | 0          |                      |
