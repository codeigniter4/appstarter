# CLAUDE.md - Project Context

## Project Overview

This is a **CodeIgniter 4 + Cockpit CMS Starter Project** - a demonstration and starter template for building applications that use CodeIgniter 4 as the frontend framework and Cockpit CMS as a headless content management system.

## Purpose

This project serves as:
- A **starter template** for developers wanting to integrate CodeIgniter 4 with Cockpit CMS
- A **demo project** showcasing best practices for consuming Cockpit CMS APIs
- A **reference implementation** for headless CMS integration with CodeIgniter 4

## Architecture

### Tech Stack

- **Frontend Framework**: CodeIgniter 4 (PHP 8.1+)
- **Content Management**: Cockpit CMS (Headless CMS)
- **Data Flow**: API consumption from Cockpit CMS endpoints
- **No Database**: This project does NOT use a local database
- **No Authentication**: This project does NOT implement authentication/authorization

### Key Characteristics

✅ **What This Project DOES:**
- Consume API endpoints from Cockpit CMS
- Display content fetched from Cockpit
- Demonstrate headless CMS integration patterns
- Provide a clean starter template

❌ **What This Project DOES NOT:**
- Use a local database (all data comes from Cockpit API)
- Implement user authentication/authorization
- Store or persist data locally
- Require database configuration

## Project Structure

```
ci4-cockpit-starter/
├── app/
│   ├── Config/          # Configuration files
│   ├── Controllers/     # Application controllers
│   ├── Views/          # View templates
│   └── ...
├── public/             # Web root (index.php lives here)
├── vendor/             # Composer dependencies
├── .env               # Environment configuration
└── composer.json      # PHP dependencies
```

## Key Configuration

### Environment Setup

1. Copy `env` to `.env`
2. Configure `baseURL` for your environment
3. Add Cockpit CMS API configuration:
   - Cockpit API URL
   - Cockpit API token/key (if required)

### Cockpit CMS Integration

This project integrates with Cockpit CMS by:
1. Making HTTP requests to Cockpit API endpoints
2. Parsing JSON responses
3. Rendering content in CodeIgniter views

## Development Guidelines

### When Working on This Project

1. **API Consumption**: All data should come from Cockpit CMS API endpoints
2. **No Database**: Do not add database models or migrations
3. **No Auth**: Do not implement authentication features
4. **Keep It Simple**: Focus on demonstrating Cockpit integration
5. **HTTP Client**: Use CodeIgniter's CURLRequest or HTTP Client for API calls

### Typical Workflow

1. Configure Cockpit CMS connection in `.env`
2. Create controllers to fetch data from Cockpit APIs
3. Parse and process API responses
4. Pass data to views for rendering
5. Style and present content as needed

## Important Notes for AI Assistants

- **Database files can be ignored**: Database.php and migration-related configs exist in the starter template but are not used
- **Focus on API integration**: The core functionality revolves around consuming Cockpit CMS APIs
- **Stateless approach**: This is a read-only application that displays content from Cockpit
- **No user management**: Do not implement login, registration, or user-related features

## Resources

- [CodeIgniter 4 Documentation](https://codeigniter.com/user_guide/)
- [Cockpit CMS](https://getcockpit.com/)
- [Cockpit API Documentation](https://getcockpit.com/documentation/api)

## Server Requirements

- PHP 8.1 or higher
- Required extensions:
  - intl
  - mbstring
  - json
  - libcurl (for API requests)

## Getting Started

1. Clone this repository
2. Run `composer install`
3. Copy `env` to `.env` and configure
4. Set up Cockpit CMS instance
5. Configure Cockpit API credentials
6. Point web server to `public/` directory
7. Start building!

---

**Last Updated**: 2026-01-06
**Project Type**: Starter/Demo
**Primary Goal**: Demonstrate CodeIgniter 4 + Cockpit CMS integration
