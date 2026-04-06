CREATE DATABASE IF NOT EXISTS portfolio_db;

USE portfolio_db;

-- Projects table
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    project_type VARCHAR(100),
    short_description VARCHAR(500),
    stacks_used VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Skills table
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    category VARCHAR(120),
    is_top_skill INT DEFAULT 0
);

-- Query messages table
CREATE TABLE query_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Visitor stats table
CREATE TABLE visitor_daily_stats (
    visit_date DATE PRIMARY KEY,
    total_visitors INT DEFAULT 0,
    weekly_visitors INT DEFAULT 0
);


ALTER TABLE visitor_daily_stats
DROP COLUMN weekly_visitors;

-- Insert sample projects
INSERT INTO projects (title, project_type, short_description, stacks_used) VALUES
('QuizHub - Anti-Cheating Quiz Platform', 'Full Stack', 'Cloud-hosted quiz system with anti-cheating controls.', 'Laravel, MySQL, JavaScript'),
('Dengue Outbreak Prediction', 'AI Model', 'Simple regression model for outbreak forecasting.', 'Python, Pandas, Scikit-learn'),
('Side Hustle', 'Full Stack', 'Platform for professionals to showcase secondary skills.', 'React, Node.js, MongoDB'),
('Portfolio Website', 'Web', 'Personal portfolio with dashboard.', 'Laravel, Tailwind CSS, Alpine.js');

-- Insert sample skills
INSERT INTO skills (name, category, is_top_skill) VALUES
('Laravel', 'Web Development', 1),
('PHP', 'Programming', 1),
('JavaScript', 'Programming', 1),
('MySQL', 'Database', 1),
('Python', 'Programming', 0),
('HTML', 'Web Development', 0),
('CSS', 'Web Development', 0);

-- Insert sample queries
INSERT INTO query_messages (email, contact, description) VALUES
('client1@example.com', '+8801700000001', 'Can we build a booking dashboard?'),
('recruiter@example.com', '+8801700000002', 'Need portfolio customization for hiring.'),
('startup@example.com', '+8801700000003', 'Interested in collaborating on a Laravel app.');

-- Insert visitor stats
INSERT INTO visitor_daily_stats (visit_date, total_visitors, weekly_visitors) VALUES
('2026-03-30', 22, 150),
('2026-03-31', 31, 150),
('2026-04-01', 27, 150),
('2026-04-02', 38, 150),
('2026-04-03', 47, 150),
('2026-04-04', 36, 150),
('2026-04-05', 41, 150);