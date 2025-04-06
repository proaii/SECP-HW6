# Homework 6 - SECPlayground Security Analyst Course

This repository contains the homework for Week 6 of the **SECPlayground Security Analyst: From Zero to Hero** course.

## Requirements

- Docker installed on your system.
- Docker Compose installed.

## Installation

Follow the steps below to set up the environment using Docker:

### Step 1: Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/proaii/SECP-HW6.git
```

### Step 2: Navigate to the Project Directory

Change into the project directory with:

```bash
cd SECP-HW6
```
### Step 3: Build and Start the Docker Containers

Run the following command to build and start the containers defined in the `docker-compose.yml` file:

```bash
docker-compose up -d --build
```

Explanation of the Command:

docker-compose up: Starts and runs the containers as defined in the docker-compose.yml file.
-d: Runs the containers in detached mode, meaning they will run in the background.
--build: Forces Docker to rebuild the images before starting the containers. This ensures that any changes made to the Dockerfiles or the application code are applied.

### Step 4: Verify Containers Are Running

After running the `docker-compose up -d --build` command, check that the containers are up and running by using the following command:

```bash
docker ps
```

### Step 5: Step 5: Access the Containers
To view logs or interact with the running containers, you can use the following command:

```bash
docker logs <container_name_or_id>
```

### Step 6: Access the Web Interface (If Applicable)

If the project includes a web interface or application, you can open your browser and navigate to the appropriate port or IP address that is exposed by the running containers.

For example, if the container exposes a web interface on port `8080`, you would open the following URL in your browser:

For this web server we will use
```bash
http://localhost:80
```

###Clean Up (Optional)

Once you're done and want to stop and remove the running containers, run the following command:

```bash
docker-compose down
```


