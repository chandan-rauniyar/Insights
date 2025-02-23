#Project Documentation
 This is the directory structure

 social-analytics-dashboard/
│── assets/                # Static files (CSS, JS, images) 
│   ├── css/               # Stylesheets 
│   │   ├── style.css 
│   ├── js/                # JavaScript & Chart Libraries 
│   │   ├── dashboard.js   # JS for interactive charts 
│   ├── images/            # Image assets 
│ 
│── includes/              # Common backend files 
│   ├── db.php             # Database connection 
│   ├── config.php         # Configuration file (API keys) 
│   ├── functions.php      # Helper functions 
│ 
│── api/                   # API handling 
│   ├── fetch_data.php     # Fetch public post/profile data 
│   ├── fetch_stats.php    # Fetch engagement metrics (likes, comments, shares)
│   ├── sentiment.php      # Perform sentiment analysis 
│ 
│── views/                 # Frontend pages 
│   ├── header.php         # Common header 
│   ├── footer.php         # Common footer 
│   ├── dashboard.php      # Main analytics dashboard 
│   ├── post_analysis.php  # Detailed analysis of posts 
│   ├── user_insights.php  # Profile-level insights 
│ 
│── auth/                  # Authentication system 
│   ├── login.php          # User login 
│   ├── register.php       # User registration 
│   ├── logout.php         # Logout script 
│ 
│── database/              # SQL script and models 
│   ├── database.sql       # Database schema 
│ 
│── index.php              # Homepage 
│── dashboard.php          # User dashboard with charts   
│── .htaccess              # Rewrite rules (optional) 
│── README.md              # Project documentation 

