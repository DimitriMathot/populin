{politics project}
==================

## Emergency

Find a name for the project !   

* demo / people  
* [Democraty history](https://en.wikipedia.org/wiki/Democracy)  
* [Vaisali](https://en.wikipedia.org/wiki/Vaisali), first democraty ever  
* [Anarchist culture](https://en.wikipedia.org/wiki/Temporary_Autonomous_Zone)  

Find a graphical identity

* may be variable according to user profile and its political opinions  
* must be very apolitical

## Technical Architecture Specs

### Git Management

*"One repo rules'em all."*

Everything in one monolythic repository, every components splitted with [split.sh](https://github.com/splitsh/lite)

![Technical Specs](images/technical_specs.jpg)

### Frontend API - Golang

This fast and simple API will query Elastic Search to answer to all resources reading needs, and on some situations call the backend API to create, update and delete resources.

### Backend API - PHP

This strong and complex API will interact with a MySQL 5.7 database and will obviously expose its own resources to the administration tool.

### Priorities

1. Backend API
2. Desktop APP
3. Frontend API
4. Mobile APP
5. Website APP

## Backend RDBMS schema

#### Technical choice

MySQL 5.7 is currently used, PostGreSQL with PostGIS extension could be a reasonable candidate too.

![DB Schema](images/DB.png)

### Updates to be done

* add rating tables
* user table ? if not in another service

## Backend API Routing

### General considerations

* API must be fully stateless
* API must be [semantically versioned](semver.org)
* API may expose data through schema.org JSON schemas and may implements JSON-LD specifications 

### Zones Types 

|Methods          | Routes                                                | Ok  | Comments                             |
|-----------------|-------------------------------------------------------|-----|--------------------------------------|
|**GET**          | /{locale}/zones-types                                 | (X) |                                      |
|**GET**          | /{locale}/zones-types/{type}                          | (X  |                                      |
|**PUT**          | /{locale}/zones-types/{type}                          |     |                                      |
|**DELETE**       | /{locale}/zones-types/{type}                          |     |                                      |
|**POST**         | /{locale}/zones-types/                                |     |                                      |

### Zones

|Methods          | Routes                                                | Ok  | Comments                             |
|-----------------|-------------------------------------------------------|-----|--------------------------------------|
|**GET**          | /{locale}/zones-types/{type}/zones                    | (X) |                                      |
|**GET**          | /{locale}/zones/{slug}                                | (X) |                                      |
|**GET**          | /{locale}/zones-types/{type}/zones/{slug}             | (X) |                                      |
|**PUT**          | /{locale}/zones/{slug}                                |     |                                      |
|**PUT**          | /{locale}/zones-types/{type}/zones/{slug}             |     |                                      |
|**DELETE**       | /{locale}/zones/{slug}                                |     |                                      |
|**DELETE**       | /{locale}/zones-types/{type}/zones/{slug}             |     |                                      |
|**POST**         | /{locale}/zones-types/{type}/zones                    |     |                                      |

### Mandates

|Methods          | Routes                                                | Ok  | Comments                              |
|-----------------|-------------------------------------------------------|-----|---------------------------------------|
|**GET**          | /{locale}/mandates                                    |     |                                       |
|**GET**          | /{locale}/mandates/{slug}                             | (X) |                                       |
|**GET**          | /{locale}/zones-types/{type}/mandates                 | (X) |                                       |
|**GET**          | /{locale}/zones-types/{type}/mandates/{slug}          | (X) |                                       |
|**PUT**          | /{locale}/mandates/{slug}                             |     |                                       |
|**PUT**          | /{locale}/zones-types/{type}/mandates/{slug}          |     |                                       |
|**DELETE**       | /{locale}/mandates/{slug}                             |     |                                       |
|**DELETE**       | /{locale}/zones-types/{type}/mandates/{slug}          |     |                                       |
|**POST**         | /{locale}/mandates/                                   |     |                                       |

### Elects

|Methods          | Routes                                                           | Ok  | Comments                             |
|-----------------|------------------------------------------------------------------|-----|--------------------------------------|
|**GET**          | /{locale}/zones-types/{type}/zones/{slug}/elects                 | (X) |                                      |
|**GET**          | /{locale}/elects/{slug}                                          | (X) |                                      |
|**PUT**          | /{locale}/elects/{slug}                                          |     |                                      |
|**DELETE**       | /{locale}/elects/{slug}                                          |     |                                      |
|**DELETE**       | /{locale}/zones-types/{type}/zones/{slug}/elects/{slug}          |     | Remove mandate of elect on this zone |
|**POST**         | /{locale}/elects                                                 |     |                                      |
|**POST**         | /{locale}/elects/{slug}/mandates                                 |     |                                      |

## Nice-to-have

* Data aggregation from daily newspapers
* Data aggregation from wikipedia
* Social networks account of elects 


