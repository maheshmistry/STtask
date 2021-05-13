# STtask

The repo contains the Coding task from Statista. The task is done in Symfony framework. The application is in /app/STtask folder. 

## Running the application:

Requirements:
	
	docker

### Steps:

#### Create Image
		docker build -t sttask-mahesh .
#### Run Container 
		docker run --rm -dp 888:8800 --name=STtaskMahesh sttask-mahesh
#### Open Browser (http://localhost:8000/) to see FizzBuzz Output
#### Unit test
		docker exec -it STtaskMahesh bash
		//you will be bash into container, execute following command to see results of Unit Test
		php bin/phpunit
		exit    //to exit the bash terminal
#### Stop Container
		docker stop STtaskMahesh





### Note: one can also run the app via local php server. 
#### Requirement: 
		php-cli, composer
#### Steps:
#### Start the server:
		php bin/console server:start
#### Open Browser to see FizzBuzz Output 
#### Run the Unit Test:
		execute following command to see results of Unit Test
		php  bin/phpunit
#### Stop the server:
		php bin/console server:stop
