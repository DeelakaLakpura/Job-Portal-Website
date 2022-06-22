-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql210.byetcluster.com
-- Generation Time: Mar 16, 2022 at 12:55 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31221545_jobster`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Applicant`
--

CREATE TABLE `Tbl_Applicant` (
  `id` int(11) NOT NULL,
  `ApplicantEmail` text NOT NULL,
  `ApplicantPhone` int(11) NOT NULL,
  `ComName` text NOT NULL,
  `JobTitle` text NOT NULL,
  `ApplicentName` text NOT NULL,
  `comemail` text NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tbl_Applicant`
--

INSERT INTO `Tbl_Applicant` (`id`, `ApplicantEmail`, `ApplicantPhone`, `ComName`, `JobTitle`, `ApplicentName`, `comemail`, `cv`) VALUES
(11, 'deelaka.lakpura94@gmail.com', 752056898, 'ds studio', 'Data Analyst', 'Deelaka Lakpura', 'ds.studios02@gmail.com', 'Bachelor\'s degree in Web development or related field, or relevant experience.\r\nSolid knowledge and experience in programming applications.\r\nProficient in JavaScript, HTML, CSS.\r\nProficient in My SQL.\r\nDedicated team player.\r\nAbility to thrive in a fast-paced environment.\r\n'),
(12, 'dinuka@gmail.com', 776950493, 'ds studio', 'Interior Designer', 'dinuka sadaruwan', 'ds.studios02@gmail.com', 'A bachelors degree is usually required in order to become an interior designer, as are classes in interior design, drawing, and computer-aided design (CAD). A bachelors degree in any field is acceptable, and interior design programs are available at the associates, bachelors, and masters degree levels.'),
(13, 'buddika.ideamart07@gmail.com', 765039201, 'ds studio', ' Software Engineer', 'Buddika chathuranga', 'ds.studios02@gmail.com', 'A bachelors degree is usually required in order to become an interior designer, as are classes in interior design, drawing, and computer-aided design (CAD). A bachelors degree in any field is acceptable, and interior design programs are available at the associates, bachelors, and masters degree levels.'),
(14, 'vinosenarathne@gmail.com', 76950493, '99X', 'Business Analyst', 'Vinodya Senarathne', '99x@gmail.com', 'A job description summarises the essential responsibilities, activities, qualifications and skills for a role. Also known as a JD, this document describes the type of work performed.\r\n\r\nA job description should include important company details â€” company mission, culture and any benefits it provides to employees. It may also specify to whom the position reports and salary range.\r\n\r\nAn effective job advertisement will provide enough detail for candidates to determine if theyâ€™re qualified for the position.'),
(15, 'nimal@gmail.com', 752058643, 'ds studio', 'Data Analyst', 'Nimal perera', 'ds.studios02@gmail.com', ' data analyst is someone who uses technical skills to analyze data and report insights.\r\n\r\nOn a typical day, a data analyst might use SQL skills to pull data from a company database, use programming skills to analyze that data, and then use communication skills to report their results to a larger audience.\r\n\r\nItâ€™s a fulfilling job that pays well. Being a data analyst also provides experience that can be beneficial for stepping into more advanced roles like data scientist.'),
(16, 'deelaka.lakpura94@gmail.com', 752056898, 'virtusa', 'Senior Software Engineer', 'Deelaka Lakpura', 'virtusa@gmail.com', 'dsfdsfdsfds'),
(17, 'csranasinghe456@gmail.com', 768251181, 'virtusa', 'Senior Software Engineer', 'Chamali', 'virtusa@gmail.com', ''),
(18, 'buddika.ideamart07@gmail.com', 752039102, 'virtusa', 'Senior Full Stack Developer', 'Buddika chathuranga', '', 'nbeowqruorhsdjfsdjhdsiqriwehrweihssbvjxcbvsourrhsafhdjvbvsfgr0rushcsvjbwe0fefhdvbjcvsfwerwe;ofewdf'),
(19, 'dinuka@gmail.com', 752056898, 'Hutch', 'Sales Representative', 'dinuka sadaruwan', 'Hutch@gmail.com', 'vasdasdasdsadas3edasfsdfsrwrvsdfsdfsdasd');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Companies`
--

CREATE TABLE `Tbl_Companies` (
  `id` int(11) NOT NULL,
  `comname` text NOT NULL,
  `comemail` text NOT NULL,
  `compass` text NOT NULL,
  `comcity` text NOT NULL,
  `comstaff` int(11) NOT NULL,
  `comprojects` int(11) NOT NULL,
  `comemployee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tbl_Companies`
--

INSERT INTO `Tbl_Companies` (`id`, `comname`, `comemail`, `compass`, `comcity`, `comstaff`, `comprojects`, `comemployee`) VALUES
(1, 'ds studio', 'ds.studios02@gmail.com', 'deelaka', 'hanwella', 20, 10, 12),
(2, 'virtusa', 'virtusa@gmail.com', 'virtusa', 'Colombo', 30, 400, 140),
(3, 'Shortstack Software', 'Shortstacksoftware@gmail.com', 'shortstack', 'Piliyandala', 20, 50, 10),
(4, 'Washington  Alliance', 'Washington@gmail.com', 'Washington', 'Mathara', 50, 90, 100),
(5, 'Dialog Axiata PLC', 'Dialog@gmail.com', 'dialog', 'Colombo', 700, 10000, 200),
(6, 'Softlogic Retail (Pvt) Ltd', 'Softlogic@gmail.com', 'softlogic', 'Colombo 10', 10000, 200, 400),
(7, 'Hutch', 'Hutch@gmail.com', 'hutch', 'Maharagama', 400, 30, 100),
(8, 'HSBC Bank', 'hsbc@gmail.com', 'hsbc', 'Colombo', 1000, 0, 400),
(9, 'AEGIS Services', 'aegis@gmail.com', 'aegis', 'Rathnapura', 50, 70, 10),
(10, 'CodeGen', 'codegen@gmail.com', 'codegen', 'Colombo', 100, 20, 140),
(11, '99X', '99x@gmail.com', '99x', 'Colombo', 1000, 100, 300),
(13, 'DHL', 'dhl@gmail.com', 'dhl', 'Colombo', 4000, 2000, 350),
(14, 'Pan Asia Bank', 'panasia@gmail.com', 'panasia', 'Colombo 11', 1400, 10, 300),
(15, 'Allen Leisure (Pvt) Ltd    ', 'superior.knitting@gmail.com', 'allen', 'Pugoda ', 14, 50, 100),
(16, 'Jones Lang LaSalle Lanka', 'Yomal.Rangajeewa@ap.jll.com', 'yomal', 'Colombo', 14, 40, 200),
(17, 'National Development Bank PLC', 'career@ndbcapital.com', 'career', 'Colombo', 60, 70, 1500),
(18, 'Cargills Bank Limited', 'career@cargillsbank.com', 'cargils', 'Colombo', 70, 90, 2000),
(19, 'AIA Insurance Lanka Limited', 'vacancies@aia.com', 'aia', 'Colombo', 60, 50, 1500),
(20, 'Asian Agro Products (Pvt) Ltd', 'info@asianagropr.com', 'asian', 'Kochchikade', 60, 50, 1500),
(21, 'iLabs', 'jobs@incubatelabs.com', 'ilabls', 'Colombo', 50, 30, 10),
(22, 'iLabs', 'jobs@incubatelabs.com', 'jobs', 'Colombo', 100, 13, 20),
(23, 'Bureau Veritas Consumer Products Services Lanka (Pvt) Ltd', 'hr.office@lk.bureauveritas.com', 'office', 'Katubedda', 100, 70, 2000),
(24, 'Siam City Cement (Lanka) Limited   ', 'recruitment.hr@siamcitycement.com', 'siam', 'Colombo', 70, 13, 200),
(25, 'Save Ventures', 'grouphr@saventures.lk', 'group', 'Colombo', 100, 40, 2000),
(26, 'Save Ventures', 'grouphr@saventures.lk', 'saven', 'Colombo', 70, 40, 200),
(27, 'Goodhope Asia Holdings Ltd    ', 'careers-lk@goodhope.co', 'good', 'Colombo', 70, 50, 1500),
(28, 'Hitachi Digital Payment Solutions Ltd', 'vacancies@hitachi-dps.com', 'dps', 'Colombo', 14, 13, 2000),
(29, 'Virtusa (Pvt.) Ltd', 'asenthilkumaran@virtusa.com', 'virtusa', 'Colombo', 100, 70, 2000),
(30, 'Maritime Placements (Pvt) Ltd', 'info@maritimesl.com', 'info', 'Colombo', 60, 13, 100);

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Contact`
--

CREATE TABLE `Tbl_Contact` (
  `id` int(11) NOT NULL,
  `Conname` text NOT NULL,
  `Conphone` text NOT NULL,
  `Conemail` text NOT NULL,
  `Conmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tbl_Contact`
--

INSERT INTO `Tbl_Contact` (`id`, `Conname`, `Conphone`, `Conemail`, `Conmessage`) VALUES
(3, 'deelaka', '0776541348', 'deelaka.lakpura94@gmail.com', 'hello!'),
(4, 'Buddika chathuranga', '0752056898', 'buddika.ideamart07@gmail.com', 'hiiiii'),
(5, 'Deelaka', '0764930193', 'deelaka.lakpura94@gmail.com', 'Hello jobster!'),
(6, 'Deelaka', '0752056898', 'ds.studios02@gmail.com', 'Hello'),
(7, 'Chami', '', 'csranasinghe456@gmail.com', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Jobs`
--

CREATE TABLE `Tbl_Jobs` (
  `id` int(11) NOT NULL,
  `jobname` text NOT NULL,
  `jobdsc` text NOT NULL,
  `jobsalary` text NOT NULL,
  `jobphone` text NOT NULL,
  `jobcompany` text NOT NULL,
  `jobdeadline` text NOT NULL,
  `jobemail` text NOT NULL,
  `jobSection` text NOT NULL,
  `jobType` text NOT NULL,
  `comCity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tbl_Jobs`
--

INSERT INTO `Tbl_Jobs` (`id`, `jobname`, `jobdsc`, `jobsalary`, `jobphone`, `jobcompany`, `jobdeadline`, `jobemail`, `jobSection`, `jobType`, `comCity`) VALUES
(1, 'Senior Full Stack Developer', 'Datamation Systems (Pvt) Ltd is a specialist developer in ERP solutions to over 25 vertical markets. We are one of Sri Lanka\'s oldest and most sought out ERP providers for the past 3 decades and have a solid reputation for successful & timely delivery.\nOur solutions are focused on providing clients real-time information. We enhance business productivity in a practical and costeffective manner with over 100 percent ROI on their ICT investment.\n\nFINAC, Sri Lanka\'s No. 1 Customizable Mid-Range ERP Software Solution, which is 100% locally developed software solution by Datamation and satisfied the business needs of over 400 clients, with 1200 modules installed.\n', '100000', '0779402930', 'virtusa', '2022-03-13', 'virtusa@gmail.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(2, 'Senior Software Engineer', 'Codimite is a software engineering service provider with only a focus on US-based clients. We have a team of problem solvers who are passionate about providing solutions to complex problems through technology. We are looking for enthusiastic talent to join our highly skilled team. Accelerate your career by joining this amazing team.\r\n\r\nRequirements\r\n\r\nThree to Five years of Experience in Software Development.\r\nExperience in GCP Stack.\r\nExperience in Python and Node.js Development.\r\nExperience in developing microservices-based (Kubernetes) applications.\r\n\r\nOur Tech Stack\r\nPython, node.js, Golang, Kubernetes, Docker, Serverless Technologies, NoSQL, Blockchain, Terraform, CI/CD\r\n\r\nWhat We Offer\r\nAbove standard remuneration package.\r\nPerformance-based incentives.\r\nStartup Culture\r\nFlexible working hours\r\nHealthcare Insurance', '120000', '0776950492', 'virtusa', '2022-04-23', 'virtusa@gmail.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(4, 'Data Analyst', 'Our ecolab team is looking for a highly motivated data analyst to drive performance improvements for the global food retail customer requirements.\r\n\r\nWhat you will do:\r\n\r\nSupports corporate vision for driving performance improvements at a dedicated customer location\r\nDelivers reports for bi-weekly, monthly and quarterly reporting\r\nProvides ad hoc report delivery for spur of the moment requests from executive leadership, as needed\r\nProvides yearly performance reporting\r\nDevelops business analyses and stays current on reporting and change needs of the customer\r\nSupports the customer with in-store support with any technical/login issues\r\nEnsures validity and accuracy of reports and dashboards\r\n\r\nPosition details:\r\n\r\nCandidate must reside in boise, id\r\nHybrid model: candidate may work remote or in office\r\n\r\nMinimum qualifications:\r\n\r\nBachelor’s degree in data science/data analytics, computer science, operations research, applied mathematics, statistics or related science and technical field\r\nAbility to easily navigate microstrategy and create requested reports\r\nExtensive excel/pivot table/vlookup experience\r\nAbility to analyze reports and assess trends\r\nHighly proficient in ms office software (word, excel, powerpoint and outlook)\r\nExperience working with senior leaders and business stakeholders\r\nNo immigrations sponsorship available for this role\r\n\r\nPreferred qualifications:\r\n\r\nAbility to learn to develop reports in powerbi\r\nAbility to analyze trends and correlate food safety risks\r\nExceptional communication, organizational skills and presentation skills\r\nSelf-discipline and high sense of urgency\r\nA strong business focus, ownership and inner self-drive to bring connected offerings to real-world customers with tangible impact\r\nComfortable working in an agile and fast-paced environment and creating order from ambiguity\r\nAbility to work with team members to do whatever it takes to get the job done\r\n\r\n#li-uscf\r\n\r\nBenefits\r\n\r\nEcolab strives to provide comprehensive and market-competitive benefits to meet the needs of our associates and their familiesClick here to see our benefits.\r\n\r\nIf you are viewing this posting on a site other than our ecolab career website, view our benefits at jobs.ecolab.com/working-here.\r\n\r\nUs federal covid-19 vaccine mandate\r\n\r\nDue to legal requirements applicable to federal contractors, applicants for this position must be fully vaccinated (i.e., 14 days past the final dose of a covid-19 vaccine regimen) and provide proof of vaccination prior to their start date unless a religious or medical accommodation is requested by the applicant and approved by ecolab.\r\n\r\nAmericans with disabilities act (ada)\r\n\r\nEcolab will provide reasonable accommodation (such as a qualified sign language interpreter or other personal assistance) with our application process upon request as required to comply with applicable lawsIf you have a disability and require accommodation assistance in this application process, please call ecolab recruiting support at (866) 841-6682 for assistance.\r\n\r\nOur commitment to diversity and inclusion\r\n\r\nAt ecolab, we believe the best teams are diverse and inclusive, and we are on a journey to create a workplace where every associate can grow and achieve their bestWe are committed to fair and equal treatment of associates and applicantsWe recruit, hire, promote, transfer and provide opportunities for advancement on the basis of individual qualifications and job performanceIn all matters affecting employment, compensation, benefits, working conditions, and opportunities for advancement, we will not discriminate against any associate or applicant for employment because of race, religion, color, creed, national origin, citizenship status, sex, sexual orientation, gender identity and expressions, genetic information, marital status, age, disability, or status as a covered veteran.\r\n\r\nIn addition, we are committed to furthering the principles of equal employment opportunity (eeo) through affirmative action (aa)Our goal is to fully utilize minority, female, disabled and covered veteran individuals at all levels of the workforceEcolab is a place where you can grow your career, own your future and impact what matters.\r\n\r\nWe will consider for employment all qualified applicants, including those with criminal histories, in a manner consistent with the requirements of applicable state and local laws, including the city of los angeles’ fair chance initiative for hiring ordinance and the san francisco fair chance ordinance.\r\n', '75000', '0769504920', 'ds studio', '2022-03-23', 'ds.studios02@gmail.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(5, ' Software Engineer', 'Job description\r\n\r\n·       Engage in the full development life cycle from conceptual designing, coding, deploying, testing and implementation.\r\n\r\n·  \r\n\r\nJob responsibilities\r\n\r\n     Proper understanding of the client requirement, analyses and documentation.\r\nJob requirements\r\n\r\n·       Bachelor’s degree in Information Technology/Software Engineering or any other related Diploma.\r\n\r\n·       2+ year industry Experience.\r\n\r\n·       Experience in PHP and related web development MVC frameworks (Codeigniter).\r\n\r\n·       Experience in database design and development with MySQL.\r\n\r\n·       Experience in HTML5, CSS, javascript, jQuery, AJAX. Knowledge in Vue.js is a plus.\r\n\r\n·       Experience in RESTful Services and API Design.\r\n\r\n', '140000', '0779302944', 'ds studio', '2022-05-19', 'ds.studios02@gmail.com', 'Trending Jobs', 'Full Time', 'hanwella'),
(6, 'Sales Representative', 'HUTCH Dealer office kottawa wanted sales representative *Pass GCE O/L *Male candidate * School leavers can also apply *Salary negotiable Minimum 50000 *Candidate should have a Valid riding lisense and own motor bike *Sales experience is an added advantage *pass GCE O/L TOP URGENT VACANCY', '45000', '07705930294', 'Hutch', '2022-04-07', 'Hutch@gmail.com', 'Trending Jobs', 'Part Time', 'Maharagama'),
(7, 'Fund Accountant', 'Requirements \nApplicant should have a Bachelor’s Degree in Business Administration, Commerce, Finance or significant progress towards a degree or a professional qualification such as ACA, CISI, CFA, CIMA, and ACCA\nMinimum 1 - 2 Years External Audit experience.\nFlexibility to work shift.\nExcellent communication skills – Written & Verbal\nExcellent interpersonal skills\nAttention to details & high level of accuracy.\nWork on own initiative\nKnowledge on MS Excel is an added advantage \nStakeholder Management working with Subject Matter Experts.\nStrong knowledge of Data Analytics and Prior experience in working with Reference Data and Reference Data systems is an added advantage\nDocumentation governance including supporting all audit related requirements\nAbility to adapt to change, learn quickly and transfer knowledge appropriately\nStrive for continuous knowledge enhancement and improvement\n', '45000', '0784930294', 'HSBC Bank', '2022-04-21', 'hsbc@gmail.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(8, ' Business Analyst', 'HSBC is one of the largest banking and financial services organizations in the world, with operations in 64 countries and territories. We aim to be where the growth is, enabling businesses to thrive and economies to prosper, and, ultimately, helping people to fulfil their hopes and realize their ambitions.', '130000', '0783940291', 'HSBC Bank', '2022-05-19', 'hsbc@gmail.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(9, 'Agile Coach', 'Entry Requirements\r\nDegree in Computer Engineering / Information Technology or Management\r\nShould have sound knowledge of Agile concepts with the ability to coach and mentor teams\r\nShould have excellent communication skills, negotiation skills and presentation skills  \r\nMinimum of 5 years experience in IT related environment having 3+ years Agile experience   \r\n', '90000', '0760429402', 'Hutch', '2022-03-31', 'Hutch@gmail.com', 'Trending Jobs', 'Part Time', 'Maharagama'),
(11, 'Manager HR Advisory', 'If you’re looking for a career that will help you stand out, join HSBC and fulfil your potential. Whether you want a career that could take you to the top, or simply take you in an exciting new direction, HSBC offers opportunities, support and rewards that will take you further.\r\n\r\nHSBC is one of the largest banking and financial services organizations in the world, with operations in 64 countries and territories. We aim to be where the growth is, enabling businesses to thrive and economies to prosper, and, ultimately, helping people to fulfil their hopes and realise their ambitions.\r\n\r\nWe are currently seeking an experienced professional to join our team in the role of Manager - HR Advisory\r\n\r\nWhy join us?\r\nIf you’re looking for further opportunities to develop your career, take the next step in fulfilling your potential right here at HSBC.\r\n\r\nHSBC Technology and Services\r\nHSBC Technology and Services is a pivotal part of the Group, providing essential operational and technical support to our global businesses and helping improve customer service and efficiency. HTS combines global expertise and technology to help keep us ahead of the competition.', '75000', '0769504920', 'HSBC Bank', '2022-03-24', 'hsbc@gmail.com', 'Favorite Jobs', 'Full Time', 'Colombo'),
(12, 'Customer Care', 'Startek (formerly known as Aegis) is a leading global provider of technology-enabled business process outsourcing solutions that offers a comprehensive suite of solutions to corporations around the world across a range of industries. The company has more than 40,000 outsourcing experts across 46 delivery campuses worldwide that are committed to delivering seamless and transformative customer experience for clients. Startek manages over half a billion customer interactions for over 150 clients across telecom, BFSI, healthcare, technology, travel, retail, energy and utilities etc.\r\n', '35000', '07839402914', 'AEGIS Services', '2022-04-16', 'aegis@gmail.com', 'Favorite Jobs', 'Full Time', 'Rathnapura'),
(13, 'Data Entry Operation', 'Startek (formerly known as Aegis) is a leading global provider of technology-enabled business process outsourcing solutions that offers a comprehensive suite of solutions to corporations around the world across a range of industries. The company has more than 40,000 outsourcing experts across 46 delivery campuses worldwide that are committed to delivering seamless and transformative customer experience for clients. Startek manages over half a billion customer interactions for over 150 clients across telecom, BFSI, healthcare, technology, travel, retail,energy and utilities etc.\r\nenergy and utilities etc.', '55000', '0783940291', 'AEGIS Services', '2022-03-12', 'aegis@gmail.com', 'Favorite Jobs', 'Part Time', 'Rathnapura'),
(14, 'Business Analyst', 'In its expansion drive company is looking forward for a dynamic, result oriented and positive minded BUSINESS ANALYST to join their winning team. This role will DIRECTLY report to CEO.', '120000', '0779402930', 'virtusa', '2022-05-19', 'virtusa@gmail.com', 'Favorite Jobs', 'Full Time', 'Colombo'),
(15, 'Business Analyst', 'In its expansion drive company is looking forward for a dynamic, result oriented and positive minded BUSINESS ANALYST to join their winning team. This role will DIRECTLY report to CEO.', '110000', '0776950492', 'Washington  Alliance', '2022-04-13', 'Washington@gmail.com', 'Trending Jobs', 'Part Time', 'Mathara'),
(16, 'Business Analyst', 'In its expansion drive company is looking forward for a dynamic, result oriented and positive minded BUSINESS ANALYST to join their winning team. This role will DIRECTLY report to CEO.', '110000', '0776950492', 'Washington  Alliance', '2022-04-13', 'Washington@gmail.com', 'Trending Jobs', 'Part Time', 'Mathara'),
(20, 'Full Stack Developer ', 'none', '150000', '0752056898', 'Washington  Alliance', '2022-04-21', 'Washington@gmail.com', 'Favorite Jobs', 'Full Time', 'Mathara'),
(27, 'Senior Executive', 'Startek (formerly known as Aegis) is a leading global provider of technology-enabled business process outsourcing solutions that offers a comprehensive suite of solutions to corporations around the world across a range of industries. The company has more than 40,000 outsourcing experts across 46 delivery campuses worldwide that are committed to delivering seamless and transformative customer experience for clients. Startek manages over half a billion customer interactions for over 150 clients across telecom, BFSI, healthcare, technology, travel, retail, energy and utilities etc.\r\n', '43000', '0752056898', 'Washington  Alliance', '2022-04-26', 'Washington@gmail.com', 'Favorite Jobs', 'Full Time', 'Mathara'),
(28, 'Interior Designer', 'The ideal candidate should possess:\r\nDegree or a professional qualification in Interior Designing\r\nMinimum of 3-5 years  experience\r\nVery good skills in AutoCAD drafting & 3D modeling.\r\nStrong verbal presentation skills and ability to communicate design concepts.\r\nGood time management skills and ability to meet tight deadlines.\r\nKnowledge of finishes and materials available in the local market.\r\nDynamic, motivational, and team oriented attitude.', '24000', '0752056898', 'ds studio', '2022-04-13', 'ds.studios02@gmail.com', 'Trending Jobs', 'Part Time', 'hanwella'),
(29, 'Full Stack Developer ', 'none', '60000', '0769309291', 'CodeGen', '2022-05-13', 'codegen@gmail.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(32, 'Full Stack Developer ', 'Full stack developers are computer programmers who are proficient in both front and back end coding. Their primary responsibilities include designing user interactions on websites, developing servers, and databases for website functionality, and coding for mobile platforms.', '150000', '0750291039', '99X', '2022-05-08', '99x@gmail.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(33, 'Business Analyst', 'â€‹ A business analyst is a key player in facilitating successful business change initiatives. Business analysts (also known as a BA) help to define business problems via in-depth investigation and gathering of technical and non-technical information.', '60000', '0752056898', 'Washington  Alliance', '2022-06-30', 'Washington@gmail.com', 'Favorite Jobs', 'Part Time', 'Mathara'),
(34, 'Engineer - Access Network Planning', 'Job Categories : Electronics / Electrical,Engineering / Manufacturing,Telecommunications,IT-HWare/Networks/Systems\r\nDescription\r\nThe Job\r\nâ€¢ Responsible for Timely identification of Engineering solutions for Network customer complaints within the defined Region in order to meet the customer requirements and improve Network experience\r\nâ€¢ Coordinate with Team within the Region and provide timely management updates and reporting\r\nâ€¢ 2G,3G and 4G Network QOS Monitoring & Trouble shooting within the region in order to identify Access network problems that could impact customer experience and make recommendations for improving Quality of Service levels to Resolve proactively\r\nâ€¢ Improve 2G,3G and 4G Radio network performance within the region in order to resolve problems and make recommendations for improving Quality of service levels.(QOS)\r\nâ€¢ Provide support and feedbacks on regional nominal Plan for each Budget Plan (BP) in order to achieve the target coverage and quality requirements\r\nâ€¢ Provide...', '660000', '0764039102', 'virtusa', '2022-05-20', 'virtusa@gmail.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(35, 'Business Analyst', 'â€‹ A business analyst is a key player in facilitating successful business change initiatives. Business analysts (also known as a BA) help to define business problems via in-depth investigation and gathering of technical and non-technical information.\r\n', '43000', '07520193445', '99X', '2022-06-25', '99x@gmail.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(36, 'IT Help Desk Executive', 'Job Purpose\r\n\r\nAdminister IT Service Management plans for the development and continual improvement of service management policies and processes in line with overall divisional business strategy and objectives, and Group guidelines and policies\r\n\r\nKey Tasks\r\n\r\nAdminister IT Service Management plans for the development and continual improvement of service management policies and processes in line with overall divisional business strategy and objectives, and Group guidelines and policies\r\n\r\nDeliver assigned tasks to execute plans for IT Service Management projects such as assessment, design, implementation and improvement of those processes.\r\n\r\nSupport coordination in quality measurement reporting and related IT Service Management continual improvement projects.\r\n\r\nApply prescribed processes for each implemented IT Service Management process and report on Critical Success Factors, Key Performance Indicators and Activity Metrics.\r\n\r\nAdminister efforts around keeping the Technical Service Catalogue updated on a regular basis, ensuing accuracy of the information with the relevant business and technical owners.\r\n\r\nTrack and manage software license usage and requirements\r\n\r\nQualifications & Key Requirements\r\n\r\nPassed GCE O/Ls and GCE A/Ls\r\n\r\nBachelorâ€™s Degree or equivalent experience qualification in relevant field\r\n\r\nLess than 2 yearsâ€™ Experience in relevant field\r\n\r\nGood Teamwork Skills', '132000', '0764920193', '99X', '2022-05-19', '99x@gmail.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(37, 'Software Engineer', 'Job Requirements\r\nThe software engineer job description starts with background requirements. Someone looking to get into this role will need a bachelorâ€™s degree in software, math, or science. Applicants would also be expected to have broad experience with computer systems and applications such as C++ or Java. \r\n\r\nDepending on the specific scope of the role, the skills required will vary, but employers will look for candidates who can offer strategic problem solving, strong analytical skills, collaboration, adaptability, a willingness to learn, innovation, and communication. ', '150000', '0776940391', 'DHL', '2022-06-08', 'dhl@gmail.com', 'Favorite Jobs', 'Full Time', 'Colombo'),
(38, 'Prodcution Manager', 'Application should reach the following address / email / WhatsApp\r\n\r\nwithin 7 days .\r\n\r\nAllen Leisure Pvt Ltd\r\n\r\nNo38 , Lunugama Road ,\r\n\r\nYakambe , Pugoda .\r\n\r\nEmail - superior.knitting@gmail.com\r\n\r\nWhatsapp - 0767 404 230\r\n\r\n', '50000', '0767 404 230', 'Allen Leisure (Pvt) Ltd    ', '2022-04-05', 'superior.knitting@gmail.com', 'Trending Jobs', 'Full Time', 'Pugoda '),
(39, 'Property Manager ', 'âœ“Ensure the smooth functioning of the apartment in a well contained complex with all modern amenities âœ“ Focus on all aspects of maintenance and upkeep of the property âœ“ Ensure that the residents ` queries and requirements are managed in an efficient and effective manner âœ“Ensure safety and security of the residents and manage the outsourced security functions âœ“ Able to handle office administrative tasks and correspondence in an independent and effective manner .\r\n\r\nLead and guide a responsive group of services and technical staff in ensuring the complex is well run .\r\n\r\nManage the day to day operations of the administrative team and maintain accurate and up to date records âœ“ Effective customer service and prioritizing basic conveniences âœ“ Liaise with outsourced service agencies on a day to day basis âœ“ Review of all deliverables and KPI`s for continued relevance ( From JD ) âœ“ Produce periodical reports align with Management Information System ( MIS ) .', '50000', '0113428904', 'Jones Lang LaSalle Lanka', '2022-04-05', 'Yomal.Rangajeewa@ap.jll.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(40, 'Junior Executive (Home Loans) - Retail Credit', 'Ensure to complete of all Home Loan applications with all applicable regulations , policies and\r\n\r\noperational guidelines both internal and external and recommending applications to the approving level adhering to the agreed SLAS Ability in analyzing for self - employed facilities / Businesses Ability to prepare Credit Appraisals for Branch Network Credit Committee ( BNCC ) and Board Credit Committee ( BCC ) approvals Responsible in preparation of financial analysis for self - employed facilities\r\n\r\nEnsure the accuracy of the Data input to the system at the data entry level Ensure pre - approval of employers / institutions as per policy and DLA\r\n\r\nResponsible in working with all stakeholders to establish high customer service standards of Retail Credit\r\n\r\nThe Person\r\n\r\na\r\n\r\nPossess a Diploma in Banking / Credit Management or any other related field Possess minimum of 6 years overall banking experience\r\n\r\nAbility to read , understand and financial statements and knowledge in markets / segments Possess strong communication and coordination skills Possess presentation and report writing skills & Financial Analytical skills\r\n\r\nShould be proactive , able to work under pressure', '50000', '0115860846', 'National Development Bank PLC', '2022-05-04', 'career@ndbcapital.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(41, 'Customer Relations Officer', 'Freshers with a flair for sales are welcome to apply Previous experience in Banking / Financial sector with exposure to Sales & Marketing\r\n\r\nwould be a definite plus Full / part qualification in Banking & Finance , CIM , SLIM or other related disciplines\r\n\r\nwould be advantageous Must be a self motivated team player Strong communication & customer service skills with a flair for sales .', '45000', '0764907835', 'Cargills Bank Limited', '2022-02-20', 'career@cargillsbank.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(42, 'Bancassurance Sales Executive', 'Bancassurance sales executives bridge the client with the bank partner. This broad definition has specific responsibilities and runs the gamut of the insurance process.\r\n\r\nThe position entails finding new clients as well as offering other products to an existing customer base. Once clients are found, the bancassurance sales executive ensures that the relationship between the existing clients as well as the partner bank is well-maintained.\r\n\r\nAside from customer service, the bancassurance sales executive is expected to handle the reporting, planning, and administration of the plans purchased by the client.\r\n\r\nAs a client, you can expect the bancassurance sales executive to present the service menu of the company to you. He or she can make recommendations based on your objectives. If you have a question about the product or the service, the sales executive is your point-person to find the right answers.', '120000', '0772173745', 'AIA Insurance Lanka Limited', '2022-03-12', 'vacancies@aia.com', 'Trending Jobs', 'Full Time', 'Colombo'),
(43, 'Quality Controller / Microbiologist', 'Perform microbiological and chemi\r\n\r\ncal analysis of finished goods and in - process samples , and ensure accurate testing is carried out according to the sample plans .\r\n\r\nEnsure conformance of finished\r\n\r\ngoods to customer specifications .\r\n\r\nBSc Degree - Food science & Technology / Microbiology or Diploma in food science & Technology or any equivalent academic / professional qualification .\r\n\r\n2yrs experience in a food manufacturing environment will be added advantage Knowledge in ISO 22000 & HACCP is a prerequisite .\r\n\r\nMales aged below 30 yrs A sense of commitment to the job & able to work under pressure Excellent communication skills both English & Sinhala with positive attitudes Motivational and interpersonal skills & ability to establish good working relations with staff and management Computer literacy specially Ms Office / Excel A good team player with flexibility & adaptability to work in a different environment Preference will be given to those residing in and around Negombo Excellent remuneration package with benefits awaits the right candidate .\r\n\r\nCarry out environmental microbial\r\n\r\ntesting and ensure good factory hygiene is maintained .\r\n\r\nSupport new product development and food safety / quality management certification .\r\n\r\nEnsure good laboratory practices are\r\n\r\nmaintained .', '140000', '077 1080 115', 'Asian Agro Products (Pvt) Ltd', '2022-03-12', 'info@asianagropr.com', 'Trending Jobs', 'Full Time', 'Kochchikade'),
(44, 'Front-End Developer - ReactJS', 'iLabs specializes in Web, Mobile, and AI technologies architecture, design, and development. We\r\nalso provide IT strategy consulting, IT operations, DevOps and SEO & Digital Marketing/Social\r\nMedia solutions. Founded in 2012 to serve the U.S. Silicon Valley startups and entrepreneurs, we\r\ncurrently work with clients in the USA, Canada, Singapore, Sri Lanka, and many other parts of the\r\nworld.\r\nWe are looking for an experienced Front-end developer with React experience to join our\r\nengineering team. In this role, you will be responsible for developing web applications with\r\nReact and other open source technologies. You will get the opportunity to participate in a variety\r\nof software development projects to build cutting-edge web applications that align with our\r\nbusiness needs.\r\n\r\nResponsibilities\r\nâ— Develop web applications with ReactJS and other related technologies\r\nâ— Work with other Front end and back end developers to integrate code\r\nâ— Ability to collaborate effectively with teams located in different places and time zones\r\n\r\nRequirements\r\nâ— 3+ years of hands-on experience in ReactJS development\r\nâ— More than 2 years of experience in Web Development\r\nâ— Strong proficiency in JavaScript, including DOM manipulation and the JavaScript object\r\nmodel\r\nâ— Experience with popular React js workflows (such as Flux or Redux)\r\nâ— Experience in working with HTML/CSS/Jquery\r\nâ— Experience with GraphQL/Relay is a bonus.\r\nâ— BS or MS in computer science/engineering or equivalent experience\r\n\r\n', '143000', '0778059403', 'iLabs', '2022-05-10', 'jobs@incubatelabs.com', 'Favorite Jobs', 'Full Time', 'Colombo'),
(45, 'Chemist in Environmental Laboratory', 'Sri Lanka branch of the French Multinational and the leading service provider for the Apparel , Food and the Environmental industries We do services such as Apparel Testing & Inspection , Food Testing , Microbiology testing , Environmental Testing and Social\r\n\r\nCompliance Audits to our Clients Below career opportunity is currently having in BVCPS - SL ,\r\n\r\nCHEMIST IN ENVIRONMENTAL LABORATORY\r\n\r\nKey Qualifications\r\n\r\nBachelor of Science degree in Environment , Chemistry or Physics with Environmental subjects in reputed University or degree holders in Institute of chemistry of Ceylon or any other reputed institution\r\n\r\nThe Role\r\n\r\nâ–º Visiting different sampling locations and conduct environmental field\r\n\r\nmonitoring ( air , stack emission , noise , vibration , water and sludge sampling ) in accordance with CEA requirements Prepare for field work , collection of samples , and operation of sampling equipment , field analysis , sample dispatch , data retrieval , equipment maintenance and calibration .\r\n\r\nOther requirements\r\n\r\nWithin the age group of 23-30 years â–º High level of integrity\r\n\r\nSound communication skills â–º Ability to work independently â†’ Flexibility and ability to adjust to the environment â–º Ability to work long hours â–º Long - distance travel and overnight stays', '45000', '0119757004', 'Bureau Veritas Consumer Products Services Lanka (Pvt) Ltd', '2022-03-14', 'hr.office@lk.bureauveritas.com', 'Favorite Jobs', 'Part Time', 'Katubedda'),
(46, 'Quality Assurance & Quality Control Technician', 'Ensure quality and cost competitiveness during concrete production Provide required technical information and ensure product optimization Enhance product portfolio through solution development / new product development Provide timely test reports Coordinating with third party labs and relevant stakeholder groups Carry out routine raw material testing and evaluation of suppliers Attending to customer complaints and solve issues Promote and contribute to the company H & S policies\r\n\r\nINSEE Cement , Sri Lanka also known as Siam City Cement ( Lanka ) is a member of the Siam City Cement Public Company Limited , a leading cement manufacturer in Southeast Asia , founded in 1969 in Thailand .\r\n\r\nQualifications and Skills\r\n\r\nNational Certificate of Technology with minimum 3 years ` experience in the concrete industry Knowledge of Concrete production & Quality Control Problem - solving and Interpersonal skills and ability to work with others Communication skills in Sinhala and / or Tamil with English\r\n\r\nThe company in Sri Lanka manufactures INSEE branded cement - Sanstha , Mahaweli Marine , Mahaweli Marine Plus , INSEE Rapid Flow , INSEE Rapid Flow Plus and INSEE Extra cement Further , INSEE Cement Sri Lanka manufactures INSEE Concrete ( Ready Mixed ) soon , and currently imports and sells Conwood , popular product in Thailand and Indonesia as a concrete - based replacement for wood .\r\n\r\nIf you strongly believe that you have the qualifications and a strong will to succeed , we invite you to email your curriculum vitae to recruitment.hr@siamcitycement.com by mentioning the subject line ` Post of Quality Assurance & Quality Control Technician - RMX`on or before 3rd March 2022 with contact details of two non - related referees .\r\n\r\nThe parent company , Siam City Cement Public Company in Thailand has its regional market footprint in Cambodia , Bangladesh , Vietnam , Indonesia and Thailand , in addition to Sri Lanka .', '50000', '0764501268', 'Siam City Cement (Lanka) Limited   ', '2022-03-16', 'recruitment.hr@siamcitycement.com', 'Favorite Jobs', 'Part Time', 'Colombo'),
(47, 'Research Assistant', 'We are looking for a Research Assistant on Part Time basis to carry out the duties and responsibilities of the job which includes , but are not limited to :\r\n\r\nCarrying out research according to protocols laid out by primary researcher / s Conducting literature reviews\r\n\r\nReviewing print and online resources to gather information Prepare interview questions , maintain accurate records of interviews , summarize interviews Collection and statistical analyses of data sets Preparing graphs and spreadsheets to portray results\r\n\r\nCreating presentation slides and posters to help researchers present findings Checking facts , proofreading , and editing research documents to ensure accuracy of the final report\r\n\r\nThe ideal Applicant should be ;\r\n\r\nAn under Graduate ( Final Year ) 1 Graduate from of Statistics Management .\r\n\r\na\r\n\r\nrecognized University in the field\r\n\r\nFamiliar with SPSS , NVIVO , QUALTRICS , EXCEL etcIn the age range of 23 years to 26 years A person who is passionate about research work / studies Fluent in both written and spoken English Knowledge of Tamil is not mandatory but will be an added advantage', '45000', '0767 404 230', 'Save Ventures', '2022-04-15', 'grouphr@saventures.lk', 'Favorite Jobs', 'Part Time', 'Colombo'),
(48, 'Application Support Engineer', 'Goodhope Asia Holdings Ltd , registered in Singapore is a major player in the food Application Support Engineer ingredient industry , specifically engaged in palm plantations & edible oils and fats space ,\r\n\r\nProfile : with operations based in South East Asia Our oil palm plantations in Indonesia are on par with benchmarked operating standards of the\r\n\r\nA Bachelor`s Degree in Computer Engineering , Computer industry .\r\n\r\nScience , Information Technology or equivalent Our values drive us towards realizing our vision\r\n\r\n1-3 years of work experience in an enterprise level application of becoming the most respected company\r\n\r\nsupport role producing high quality sustainable palm oil , Hands - on experience in SQL / PLSQL & Programming Knowledge palm and lauric derivative products .\r\n\r\nin Java We are seeking to recruit a high caliber finance Experience with databases ( Oracle , MySQL ) and application professional to join our team .\r\n\r\nservers such as JBoss Just like you , our Company is dedicated to a Knowledge on working in Linux / Unix environments would be a brighter future ; a future where we take care of\r\n\r\ndefinite plus our own and those around us We take pride in Good experience in application troubleshooting and finding sustaining a business environment that consists\r\n\r\nissues of accountability , ethical work practices , economic viability and the responsible\r\n\r\nGood communication skills management of natural resources adhering to global standards', '45000', '0767 404 230', 'Goodhope Asia Holdings Ltd    ', '2022-04-12', 'careers-lk@goodhope.co', 'Favorite Jobs', 'Part Time', 'Colombo'),
(49, 'Software Engineer - Java', 'HITACHI Inspire the Next\r\n\r\nEven through trying times such as the present , we , at Hitachi Digital Payment Solutions are on the journey of driving digital innovations in the payment industry We aspire to become a cornerstone organization in revving and reinforcing the payment landscape of Sri Lanka and would like you to be apart of our team and mission .\r\n\r\nasprot- > ty classecat - se Unsessore\r\n\r\nuv class = ` colo div classro -\r\n\r\nclasse a rete\r\n\r\nfonconcept\r\n\r\nSOFTWARE ENGINEER ( JAVA )\r\n\r\ngot angepe\r\n\r\nendal Aalen ACAO\r\n\r\nganda deboard phe tovores e tavertentagram pho\r\n\r\nsell classe tovert Oraho Kaalalaapp\r\n\r\ndyroses O V Core oma rady\r\n\r\nStrong passion for programming Interest in keeping up to date in technologies & Tools Willingness to devote long working hours / weekends when required\r\n\r\nRequired Skills\r\n\r\nGood knowledge in Core Java JSP / Servlets , React JS , Microservices , Spring boot , CSS & JavaScript Oracle , DB2 & PostgreSQL\r\n\r\nExperience :\r\n\r\n2-3 Year of Development Experience\r\n\r\nQualification :\r\n\r\nUniversity Degree in Computer Science or Computer Engineering or similar Professional Qualification .', '120000', '0115860846', 'Hitachi Digital Payment Solutions Ltd', '2022-04-17', 'vacancies@hitachi-dps.com', 'Favorite Jobs', 'Full Time', 'Colombo'),
(50, 'Senior QA Engineer - Test Automation', 'Bachelor`s degree in the relevant field 3+ years of QA experience Experience in using Selenium ISTQB certification will be an advantage Experience with minimum one test management and defect tracking\r\n\r\nStrong knowledge in Java and an additional framework Ability to design and develop a structured framework Experience in Cucumber will be an added advantage Experience in test planning , traceability matrix , tool optimization and test data planning', '50000', '0113428904', 'Virtusa (Pvt.) Ltd', '2022-05-13', 'asenthilkumaran@virtusa.com', 'Trending Jobs', 'Part Time', 'Colombo'),
(51, 'UI/UX Designer', '1-2 years of experience in creating UI/UX for web and mobile\r\n\r\nStrong visual design sense to develop intuitive, hierarchical UX\r\n\r\nStrong attention to detail and have a keen eye for aesthetics\r\n\r\nExperience in colloborating with the engineering teams to define user requiremnets \r\n\r\nExcellent communication skills and being able to clearly articulate your ideas, designs, and suggestions \r\n\r\nExperience in presenting to stakeholders, identifying uderlying isues/ gaps through discussion with stakeholders \r\n\r\nProficiency in design tools such as Figma and Adobe suite\r\n\r\nDesign wireframes, limited prototypes, and final user interfaces with clearly defined markups and UX\r\n\r\nGuide and mentor the UI/UX Design team members \r\n\r\n', '50000', '0764907835', 'Maritime Placements (Pvt) Ltd', '2022-04-15', 'info@maritimesl.com', 'Trending Jobs', 'Full Time', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Newsletter`
--

CREATE TABLE `Tbl_Newsletter` (
  `id` int(11) NOT NULL,
  `emails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tbl_Newsletter`
--

INSERT INTO `Tbl_Newsletter` (`id`, `emails`) VALUES
(1, 'deelaka.lakpura94@gmail.com'),
(2, 'isini.galpaya2001@gmail.com'),
(3, 'vinosenarathne@gmail.com'),
(4, 'ds.studios02@gmail.com'),
(5, 'ds.studios02@gmail.com'),
(6, 'deelaka.lakpura2001@gmail.com'),
(7, 'sunil.perera@gmail.com'),
(8, 'herath@gmail.com'),
(9, 'herath@gmail.com'),
(10, 'herath@gmail.com'),
(11, 'gethseamen.com@au'),
(12, 'neno123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tbl_Applicant`
--
ALTER TABLE `Tbl_Applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tbl_Companies`
--
ALTER TABLE `Tbl_Companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tbl_Contact`
--
ALTER TABLE `Tbl_Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tbl_Jobs`
--
ALTER TABLE `Tbl_Jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tbl_Newsletter`
--
ALTER TABLE `Tbl_Newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tbl_Applicant`
--
ALTER TABLE `Tbl_Applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Tbl_Companies`
--
ALTER TABLE `Tbl_Companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Tbl_Contact`
--
ALTER TABLE `Tbl_Contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Tbl_Jobs`
--
ALTER TABLE `Tbl_Jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `Tbl_Newsletter`
--
ALTER TABLE `Tbl_Newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
