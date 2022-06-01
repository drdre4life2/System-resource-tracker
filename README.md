

## About node Statistics

Node statistics is an application the records system staistics and retains only 24 daily redords.
Records can be created updated and deleted. 

## Installation guide

- **Clone the repository from github**
- **Set up the database paramenters in the env file. you can copy env.example to start**
- **Serve the APPIcation**

## Cron Job
The system clears stale data by levraging on laravels cosole's cro job in app/Console/kernel and runs every 24 hours

## Notes
Jwt was used for te authentication. You will need to login into the app to get the token. Check the documentation for details.


## Documentation

Detailed API documentation can be found at https://documenter.getpostman.com/view/5999449/Uz5Dqxum

