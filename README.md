
## IQEQ

#### Comment what other endpoints you consider critical for a standard REST API implementation.

- authentication
    - /api/auth/login
    - /api/auth/register
    - /api/auth/password/reset
    - /api/auth/password/update

- manufacturers
    - /api/manufacturers - post
    - /api/manufacturers - get all
    - /api/manufacturers/:manufacturer_id - get one
    - /api/manufacturers/:manufacturer_id - delete
    - /api/manufacturers/:manufacturer_id - put

- vehicles
    - /api/vehicles - post
    - /api/vehicles - get all
    - /api/vehicles/:vehicle_id - get one
    - /api/vehicles/:vehicle_id - delete
    - /api/vehicles/:vehicle_id - put
