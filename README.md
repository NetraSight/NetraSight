# NetraSight - AI-Powered Business Insights Platform

## Overview
NetraSight is an open-source, self-hosted AI-driven analytics platform that enables businesses to extract insights from their databases effortlessly. By integrating Llama AI with your database, NetraSight replaces the need for a data analyst by automatically generating queries, visualizing data, and providing real-time business intelligence.

## Features
- **Self-Hosted & Open Source**: Full control over your data with easy deployment.
- **AI-Powered Insights**: NetraSight converts user queries into SQL, retrieves data, and generates meaningful insights.
- **Interactive Dashboards**: AI-driven charts and reports for better decision-making.
- **Plugin System**: Extend functionality with plugins like Data Analysis, Dynamic Dashboards, Marketing Insights, and Report Generation.
- **One-Click Setup**: Get started quickly with Docker and automated scripts.
- **Database Agnostic**: Works with MySQL, PostgreSQL, and more (support expanding).

## How It Works
1. **Connect Your Database**: Plug in your MySQL or PostgreSQL database.
2. **Ask AI Any Question**: Query your business data using natural language.
3. **AI Translates to SQL**: Llama AI generates optimized SQL queries.
4. **Retrieve & Visualize Data**: AI fetches data and presents it in intuitive dashboards.
5. **Gain Insights**: Get trends, analytics, and predictive business insights.

## Installation
### **Requirements**
- **Docker & Docker Compose**
- **PHP 8.1+**
- **Node.js 16+**
- **MySQL 8.0+**
- **Composer & NPM**

### **Step 1: Clone Repository**
```bash
git clone https://github.com/netrasight/netrasight.git
cd netrasight
```

### **Step 2: Set Up Backend**
```bash
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
```

### **Step 3: Set Up Frontend**
```bash
cd ../frontend
npm install
npm run dev
```

### **Step 4: Run with Docker**
```bash
docker-compose up -d
```

## API Usage
NetraSight provides REST APIs to interact with AI-generated insights.
```bash
POST /api/query
{
  "query": "What was the AOV of the last 100 orders?"
}
```
**Response:**
```json
{
  "data": { "aov": 123.45 }
}
```

## Plugin Development
Extend NetraSight with custom plugins.
### **Create a Plugin**
```bash
cd plugins
mkdir my-custom-plugin
cd my-custom-plugin
```
Add a `plugin.json` for metadata:
```json
{
  "name": "My Custom Plugin",
  "description": "Adds custom analytics",
  "version": "1.0.0"
}
```
Activate the plugin in `config/plugins.php`.

## Community & Contributions
NetraSight is community-driven! Contribute by:
- Reporting issues
- Submitting pull requests
- Developing plugins

## License
NetraSight is licensed under the **MIT License**. Free for personal and commercial use.

## Support
For issues and feature requests, visit our [GitHub Issues](https://github.com/netrasight/netrasight/issues).

