## Homework 6 - SECPlayground Security Analyst Course
This repository contains the homework for Week 6 of the SECPlayground Security Analyst: From Zero to Hero course.

This project is a web authentication demo application integrated with Graylog for comprehensive logging and monitoring. The application features a simple login system with a stylish UI, combined with a robust logging infrastructure powered by Graylog, MongoDB, and syslog-ng.

## Features

### Authentication System

- **User Login**: Simple PHP-based authentication system
- **Dashboard Access**: Protected resources accessible only after successful authentication
- **Session Management**: PHP sessions for login state preservation
- **Logout Functionality**: Session termination and redirection

### Monitoring & Logging

- **Graylog Integration**: Centralized log management with Graylog 6.1
- **DVWA Container**: Deliberately Vulnerable Web Application for testing security monitoring
- **Syslog-ng**: Advanced log collection and forwarding
- **MongoDB**: Backend database for log storage and management

### Web Stack

- **Nginx**: Web server for serving content
- **PHP-FPM**: PHP processing for dynamic content
- **Modern UI**: Clean and responsive design with CSS effects

## Tech Stack

### Frontend

- **UI Framework**: Custom CSS with Poppins font and Font Awesome icons
- **Design**: Gradient backgrounds with glass-morphism effects
- **Responsiveness**: Mobile-friendly layout with flexbox

### Backend

- **Server**: Nginx latest
- **Processing**: PHP 8.1-FPM
- **Authentication**: PHP session-based authentication
- **Login Form**: Server-side form processing

### Logging Infrastructure

- **Log Management**: Graylog 6.1 with datanode
- **Database**: MongoDB 6.0 for log storage
- **Log Routing**: syslog-ng for log collection
- **Container Management**: Docker and Docker Compose

## Installation

### Prerequisites

- Docker and Docker Compose installed
- Basic understanding of containerized applications

### Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/your-repo/SECP-HW6.git
   cd SECP-HW6
   ```

2. Create the necessary directories for volumes:

   ```bash
   mkdir -p logs html/nginx
   ```

3. Launch the application stack:

   ```bash
   docker-compose up -d
   ```

4. Access the application:
   - Authentication Demo: [http://localhost:80](http://localhost:80)
   - Graylog Interface: [http://localhost:9000](http://localhost:9000)
   - DVWA Application: [http://localhost:8080](http://localhost:8080)

## Usage

### Authentication Demo

- Use the following credentials to log in:
  - Username: `admin`
  - Password: `admin`

### Graylog Management

- Access the Graylog interface at [http://localhost:9000](http://localhost:9000)
- Default Graylog credentials:
  - Username: `admin`
  - Password: `admin`

### DVWA Security Testing

- DVWA is accessible at [http://localhost:8080](http://localhost:8080)
- Follow DVWA documentation for setup and usage

## Project Structure

```
SECP-HW6/
├── docker-compose.yml      # Docker Compose configuration
├── html/                   # Web application files
│   ├── index.php           # Login page
│   ├── dashboard.php       # Protected dashboard
│   ├── logout.php          # Logout functionality
│   └── styles.css          # Styling for the application
├── nginx/                  # Nginx configuration
│   └── default.conf        # Server configuration
├── logs/                   # Log storage
│   └── syslog-ng.conf      # Syslog configuration
└── README.md               # Project documentation
```

## Configuration Details

### Graylog

The Graylog stack is configured with:
- Password secret: `somesecretpasswordpepper`
- Admin password hash: SHA2 of "admin"
- Web interface accessible on port 9000
- Multiple input ports configured for various log formats

### Docker Networks

- All services are connected through the `graylog` bridge network
- Exposed ports are configured for external access to services

## Security Notes

This application is designed for demonstration purposes:
- The login system uses hardcoded credentials (not suitable for production)
- DVWA is deliberately vulnerable and should be used only in isolated environments
- Default passwords should be changed before any production use


