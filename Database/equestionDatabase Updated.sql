-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 08:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catId` int(5) NOT NULL,
  `catName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catId`, `catName`) VALUES
(119, 'General Aptitude'),
(120, 'Verbal And Reasoning'),
(121, 'Current Affairs And GK'),
(123, 'Engineering'),
(124, 'Programming'),
(125, 'Technical MCQs'),
(126, 'Medical Science'),
(127, 'Tony');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`, `date`) VALUES
(1, 'hhhhhhhhhhh', 'tony@gmail.com', 'hfghdfhhfdhfh', '17:10:2017'),
(2, 'jjjjjjjjjj', 'tony@gmail.com', 'jhgjghjgfjg', '17:10:2017'),
(3, '', 'tony@gmail.com', '', '17:10:2017'),
(4, 'Tony', 'tony@gmail.com', 'adhauydgwdgygguygdyugwy', '17:10:2017'),
(5, 'revathy', 'tony@gmail.com', 'heeyyyyyyyyyyy....lalalalalala', '09:11:2017'),
(6, 'sss', 'tony@gmail.com', 'yes it was nice', '14:11:2017'),
(7, 'ggggggg', 'tony@gmail.com', 'oioioiomk ijhuuhyuhuh', '14:11:2017');

-- --------------------------------------------------------

--
-- Table structure for table `qoptions`
--

CREATE TABLE `qoptions` (
  `optionId` int(5) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qoptions`
--

INSERT INTO `qoptions` (`optionId`, `option1`, `option2`, `option3`, `option4`) VALUES
(15, '120 Metres', '140 Metres', '13 Metres', '150 Metres'),
(16, '1/2', '2/5', '8/15', '9/20'),
(17, '120 Metres', '180 Metres', '324 Metres', '150 Metres'),
(18, '45 Km/hr', '50 Km/hr', '54 Km/hr', '55 Km/hr'),
(19, '35', '36', '45', '54'),
(20, '9', '11', '13', '15'),
(21, '4', '8', '16', 'None Of These'),
(22, '15360', '153600', '30720', '307200'),
(23, '16 Cm', '18 Cm', '24 Cm', 'Data Inadequate'),
(24, '9', '11', '7', '12'),
(25, '648', '1800', '2700', '10800'),
(26, '0.934', '0.945', '0.954', '0.958'),
(27, '3.6', '7.2', '8.4', '10'),
(28, '50 Km', '56 Km', '70 Km', '80 Km'),
(29, '15', '16', '18', '25'),
(30, '30%', '70%', '100%', '250%'),
(31, '3', '4', '5', '6'),
(32, '4 V', '60 V', '15 V', '0.25 V'),
(35, 'Open', 'Insulated', 'High Resistance', 'Closed'),
(36, 'Thermistor', 'Rheostat', 'Potentiometer', 'Photoconductive Cell'),
(37, 'To Measure Current', 'In Series With The Circuit', 'In Parallel With The Circuit', 'To Measure Coulombs'),
(38, '1', '2', '4', '6'),
(39, 'Junction', 'Depletion Region', 'Barrier Voltage', 'Forward Voltage'),
(40, 'Doping', 'Diffusion', 'Barrier Potential', 'Ions'),
(41, 'Has A Low Junction Resistance', 'Is Reverse Biased', 'Cannot Overcome Its Barrier Voltage', 'Has A Wide Depletion Region'),
(42, 'World War 2', '1904', '1907', '1960'),
(43, 'Lack Electrons', 'Share Holes', 'Lack Holes', 'Share Electrons'),
(44, '1', '2', '3', '4'),
(45, 'Extrinsic Semiconductor Material', 'Pentavalent Material', 'N-type Semiconductor', 'Majority Carriers'),
(46, 'Complete Inhibition', 'Incomplete Inhibtion', 'Partial Inhibition', 'Mixed Inhibition'),
(47, 'Competitive', 'Non-competitive', 'Uncompetitive', 'All Of The Above'),
(48, 'The Complex Formation Step', 'The Complex Dissociation Step To Produce Product', 'The Product Formation Step', 'Both (a)and(c)'),
(49, 'Calpain', 'Cathepsin D', 'Papain', 'None Of The Above'),
(50, 'Induced Fit', 'Transition', 'Fit And Fine', 'Pasteur'),
(51, 'At The Center Of Globular Proteins', 'Rigid And Does Not Change Shape', 'Complementary To The Rest Of The Molecule', 'None Of The Above'),
(52, 'Hydrolases', 'Ligases', 'Transferases', 'Isomerase'),
(53, 'Dixon Plot', 'Woolf-Augusteinsson-Hofstee Plot', 'Eadie-Scatchard Plot', 'Hanes-Woolf Plot'),
(54, 'Iodine', 'Methotrexate', 'Sulfbnilamide', 'Penicillin'),
(55, 'It Moves The Entire Curve To Right', 'It Moves The Entire Curve To Left', 'It Changes The X-intercept', 'It Has No Effect On The Slope'),
(56, 'Increases The Binding Affinity', 'Decreases The Binding Affinity', 'Stabilizes The R State Of The Protein', 'Both (a) And (c)'),
(57, '1', '2', 'Not Defined', 'None Of The Above'),
(58, 'A Sigmodial Binding Curve', 'A Hyperbolic Binding Curve', 'A Linear Scatchard Plot', 'Both (b) And (c)'),
(59, 'The Absence Of Competing Ligands', 'The Amino Acid Residues Lining The Binding Site', 'The Presence Of Hydrating Water Molecules', 'The Opposite Chirality Of The Binding Ligand'),
(60, 'Chymotrypsin', 'Trypsin', 'Elastase', 'All Of These'),
(61, 'It Cleave After Arg Residues', 'It Cleave After His Residues', 'It Cleave After Lys Residues', 'None Of The Above'),
(62, 'Serine', 'Water', 'Both (a) And (b)', 'Asparagine'),
(63, 'Hydrophobic Specificity Pocket', 'Hydrophilic Specificity Pocket', 'Cluster Of Reactive Serine Residues', 'Single Reactive Serine Residue'),
(64, 'Covalently Bonded To A Sugar', 'Ionically Bonded To A Sugar', 'Hydrogen Bonded To A Sugar', 'None Of The Above'),
(65, 'Large Fragments', 'Small Fragments', 'Large Genome', 'None Of These'),
(66, 'Cytosine', 'Thymine', 'Uracil', 'Adenine'),
(67, '25-30 Kb', '18-20 Kb', '20-25 Kb', '40-50 Kb'),
(68, 'Phage', 'Phagemid', 'Cosmid', 'Plasmid'),
(69, 'It Is Extrachromosomal', 'It Is Double Stranded', 'Its Replication Depends Upon Host Cell', 'It Is Closed And Circular DNA'),
(70, 'The Right Arm Of The Vector DNA', 'The Left Arm Of The Vector DNA', 'Central Fragment Of The Vector DNA', 'None Of The Above'),
(71, 'Exhibit Antibiotic Resistance', 'Do Not Exhibit Antibiotic Resistance', 'Carry Transfer Genes Called The Tra Genes', 'Do Not Carry Transfer Genes'),
(72, '100 Kbp', '50 Kbp', '20 Kbp', '10 Kbp'),
(73, '1-2 Kb', '6-7 Kb', '9-20 Kb', '30-35 Kb'),
(74, 'Plasmid', 'Cosmid', 'Bacteriophage', 'Phagemid'),
(75, 'Filamentous Phage', 'Single Stranded DNA Vector', 'Both (a) And (b)', 'Plasmid'),
(76, 'Combination Of Plasmid And Phage Î»', 'Combination Of Phages And Cosmid', 'Phages Carrying Properties Of Plasmids', 'All Of The Above'),
(77, 'For Sequencing Of Cloned DNA', 'For Oligonucleotide Directed Mutagenesis', 'For Probe Preparation', 'All Of The Above'),
(78, '50 Kb', '35-53 Kb', '40-50 Kb', 'Any Size'),
(79, 'Plasmid Vector', 'Cosmid Vector', 'Phage Vector', 'Phagemid Vector'),
(80, 'Stringent Plasmids', 'Relaxed Plasmids', 'Cryptic Plasmids', 'All Of These'),
(81, 'Switch', 'Goto', 'Go Back', 'Return'),
(82, 'Strinit()', 'Strnset()', 'Strset()', 'Strcset()'),
(83, 'Strnstr()', 'Laststr()', 'Strrchr()', 'Strstr()'),
(84, 'Strchr()', 'Strrchr()', 'Strstr()', 'Strnset()'),
(85, 'Printf();', 'Scanf();', 'Gets();', 'Puts();'),
(86, 'Conio.h', 'Stdlib.h', 'Stdio.h', 'Dos.h'),
(87, 'Strnchar()', 'Strchar()', 'Strrchar()', 'Strrchr()'),
(88, 'Standard Error', 'Standard Error Types', 'Standard Error Streams', 'Standard Error Definitions'),
(89, 'Float, Double', 'Short Int, Double, Long Int', 'Float, Double, Long Double', 'Double, Long Int, Float'),
(90, 'Use 3.14LD', 'Use 3.14L', 'Use 3.14DL', 'Use 3.14LF'),
(91, 'Compile-time Error.', 'Preprocessing Error.', 'Runtime Error.', 'Runtime Exception.'),
(92, 'Enter And Leave Scope', 'Inherit Parent Class', 'Are Constructed', 'Are Destroyed'),
(93, 'Constructor', 'Destructor', 'Main', 'Virtual Function'),
(94, 'Constructor', 'Destructor', 'Data Members', 'Both A And C'),
(95, 'Zero-argument Constructor', 'Destructor', 'Copy Constructor', 'Copy Destructor'),
(96, 'Only One', 'Two', 'Three', 'Unlimited'),
(97, 'Only Once', 'Twice', 'Thrice', 'Depends On The Way Of Creation Of Object'),
(98, 'Constructor', 'Virtual Function', 'Destructor', 'Main'),
(99, 'A Constructor Has A Return Type.', 'A Constructor Cannot Contain A Function Call.', 'A Constructor Has No Return Type.', 'A Constructor Has A Void Return Type.'),
(100, 'The Default Constructor Of The Object Is Called.', 'The Parameterized Destructor Is Called', 'The Default Destructor Of The Object Is Called', 'None Of The Above.'),
(101, '0.50', '0.60', '2', '1'),
(102, 'Maximum Number Of Ideal Plates.', 'Height Of The Distillation Column.', 'Minimum Number Of Theoretical Plates.', 'Optimum Reflux Ratio.'),
(103, 'Reboiler Load', 'Number Of Plates', 'Condenser Load', 'All (a), (b) And (c)'),
(104, 'Raising The Temperature.', 'Lowering The Total Pressure.', 'Both (a) And (b)', 'Neither (a) Nor (b).'),
(105, '+ve', '-ve', 'Zero', 'None Of These'),
(106, 'Natural', 'Forced', 'Induced', 'None Of These'),
(107, 'Boiling Point', 'Freezing Point', 'Vapour Pressure', 'Both (b) And (c)'),
(108, 'Diffusion', 'Heat Transfer', 'Both (a) And (b)', 'Neither (a) Nor (b'),
(109, 'Increases With Temperature Rise.', 'Decreases With Temperature Rise.', 'Decreases With Decrease In Pressure.', 'Increases With Increase In Pressure.'),
(110, 'Lewis Number', 'Schmidt Number', 'Prandtl Number', 'Sherwood Number'),
(111, 'Evaporation', 'Drift', 'Blowdown And Leakage', 'All (a), (b) And (c)'),
(112, '1.435 M As Adopted In England', '1.800 M As Per Indian Conditions', '1.676 M As A Compromise Gauge', '1.000 M As A Standard Gauge'),
(113, 'Are Generally Applied On Structural Steel', 'Are Less Durable As Compared To Enamel Paints', 'Consist Of Resin And Nitro-cellulose', 'All The Above.'),
(114, '0.25%', '1.0%', '1.5%', '2%'),
(115, 'Quartz Sand', 'Pure Gypsum', 'Magnesite', 'Granite'),
(116, 'Tricalcium Silicate', 'Di-calcium Silicate', 'Tri-calcium Aluminate', 'Tetra Calcium Alumino Ferrite.'),
(117, 'Five Times Their Original Dimensions', 'Five Times Their Original Dimensions', 'Ten Times Their Original Dimensions', 'Three Times Their Original Dimensions.'),
(118, 'Is Used As Water Proofing Material', 'Is Used As Damp Proofing Material', 'Is Made From Bitumen And Hessian Fibres', 'All The Above.'),
(119, 'Tricalcium Aluminate', 'Tetra-calcium Alumino-ferrite', 'Tricalcium Silicate', 'Dicalcium Silicate.'),
(120, '30 Minutes', '60 Minutes', '90 Minutes', '120 Minutes'),
(121, 'The Monsoon', 'The Winter', 'The Summer', 'None Of These.'),
(123, 'Metamorphic Rock', 'Argillaceous Rock', 'Calcareous Rock', 'Silicious Rock'),
(124, 'Bessemer Pig', 'Grey Or Foundry Pig', 'White Forge Pig', 'Mottled Pig.'),
(125, 'Sedimentary Rock', 'Metamorphic Rock', 'Igneous Rock', 'Volcanic Rock.'),
(126, 'Bessemer Pig', 'Grey Or Foundry Pig', 'White Or Forge Pig', 'Mottled Pig.'),
(127, '18% Of Chromuim And 8% Nickel', '8% Of Chromium And 18% Of Nickel', '12% Of Chromium And 36% Of Nickel', '36% Of Chromium And 12% Of Nickel.'),
(128, 'Granite', 'Dolerite', 'Basalt', 'All The Above.'),
(129, 'Cast Iron', 'Wrought Iron', 'Steel', 'All The Above.'),
(130, '1.5% To 5.5%', '0.5% To 1.75%', '0.1% To 0.25%', 'None To These.'),
(131, 'ROM BIOS', 'CPU', 'Boot.ini', 'CONFIG.SYS'),
(132, 'Over Heat', 'Power Surges', 'EMI.', 'Incomplete Path For ESD'),
(133, 'Dip Switches', 'CONFIG.SYS', 'Jumper Settings', 'Motherboard BIOS'),
(134, 'Protocol Speed', 'A Fiber Speed', 'Megabits Per Seconds', 'Minimum And Maximum Server Speed'),
(135, 'ATX', 'AT', 'BABY AT', 'All Of The Above'),
(136, 'Clusters', 'Sectors', 'Vectors', 'Heads'),
(137, 'Surge Protector', 'Capacitor', 'Voltmeter', 'Resistor'),
(138, 'RS232', 'RS-232a', 'CAT 5', 'IEEE 1284'),
(139, 'TMC Solvent', 'Silicone Spray', 'Denatured Alcohol', 'All-purpose Cleaner'),
(140, 'Power Supply', 'Expansion Board', 'Monitor', 'Keyboard'),
(142, 'Floppy Drive', 'SCSI Drive', 'IDE Drive', 'Zip Drive'),
(143, 'Uttar Pradesh', 'Odisha', 'Gujarat', 'Madhya Pradesh'),
(144, '100', '75', '85', '98'),
(145, 'Uttar Pradesh', 'Kerala', 'TamilNadu', 'Andra Pradesh'),
(146, 'Odisha', 'West Bengal', 'Uttar Pradesh', 'Madhya Pradesh'),
(147, 'Himachal Pradesh', 'Uttrakhand', 'Jammu & Kashmir', 'Nagaland'),
(148, 'Telangana', 'Bihar', 'Assam', 'Odisha'),
(149, 'Bihar', 'Himachal Pradesh', 'Uttar Pradesh', 'Punjab'),
(150, 'Maharashtra', 'Goa', 'Andhra Pradesh', 'Karnataka'),
(151, 'Guwahati', 'Chennai', 'Kochi', 'Hyderabad'),
(152, 'Tamilnadu', 'Puducherry', 'Kerala', 'Karnataka'),
(153, 'Manipur', 'Punjab', 'Tripura', 'Rajasthan'),
(154, 'IDMS', 'DB2', 'DBase-II', 'R:base'),
(155, 'User Data', 'Metadata', 'Reports', 'Indexes'),
(156, 'Single-user Database Application', 'Multiuser Database Application', 'E-commerce Database Application', 'Data Mining Database Application'),
(157, 'Structured Query Language', 'Sequential Query Language', 'Structured Question Language', 'Sequential Question Language'),
(158, 'Creating And Processing Forms', 'Creating Databases', 'Processing Data', 'Administrating Databases'),
(159, 'Database', 'Table', 'Instance', 'Relationship'),
(160, 'Users', 'Database Applications', 'DBMS', 'COBOL Programs'),
(161, 'Partial Operational Data.', 'Historical Operational Data.', 'Future Operational Data.', 'Health Care Data.'),
(162, 'The Data Formats May Be Inconsistent.', 'Data Values May Not Agree.', 'Both A & B.', 'Neither A & B.'),
(163, 'Add Records', 'Read Records', 'Update Records', 'All Of The Above.'),
(164, 'Be Accurate And Available.', 'Provide For Backup And Recovery.', 'Be Secure.', 'All Of The Above.'),
(165, 'A = 1, B = 1, C = 0', 'A = 0, B = 0, C = 0', 'A = 1, B = 1, C = 1', 'A = 1, B = 0, C = 1'),
(166, '1', '2', '7', '8'),
(167, 'AND', 'NAND', 'NOR', 'OR'),
(168, 'DMM', 'Spectrum Analyzer', 'Logic Analyzer', 'Frequency Counter'),
(169, '2 Circuits', '4 Circuits', '6 Circuits', '8 Circuits'),
(170, '9-volt Supply', '3-volt Supply', '12-volt Supply', '5-volt Supply'),
(171, 'All Inputs Are HIGH', 'Any Input Is HIGH', 'Any Input Is LOW', 'All Inputs Are LOW'),
(172, 'Competitive With TTL', 'Three Times That Of TTL', 'Slower Than TTL', 'Twice That Of TTL'),
(173, 'Open Collector Output', 'Tristate', 'The Output Is Inverted.', 'None Of The Above'),
(174, '3, 6, 10, And 13', '1, 4, 10, And 13', '3, 6, 8, And 11', '1, 4, 8, And 11'),
(175, 'Any One Of The Inputs', 'Any Two Of The Inputs', 'Any Three Of The Inputs', 'All Four Inputs'),
(177, 'Asia', 'Africa', 'Europe', 'Australia'),
(178, 'Asia', 'Africa', 'Europe', 'Australia'),
(179, 'Junagarh, Gujarat', 'Diphu, Assam', 'Kohima, Nagaland', 'Gangtok, Sikkim'),
(180, 'Physics And Chemistry', 'Physiology Or Medicine', 'Literature, Peace And Economics', 'All Of The Above'),
(181, 'Labour Party', 'Nazi Party', 'Ku-Klux-Klan', 'Democratic Party'),
(182, 'Foreign Finance Corporation', 'Film Finance Corporation', 'Federation Of Football Council', 'None Of The Above'),
(183, 'Dr. G. D. Bist', 'J.R.D. Tata', 'J.M. Tagore', 'Khudada Khan'),
(184, 'Horse Racing', 'Polo', 'Shooting', 'Snooker'),
(185, '1967', '1968', '1958', '1922'),
(186, 'Tennis', 'Volleyball', 'Basketball', 'Cricket'),
(187, 'May 8', 'May 18', 'June 8', 'June 18'),
(188, 'Oxygen', 'Hydrogen Sulphide', 'Carbon Dioxide', 'Nitrogen'),
(189, 'Phosphorous', 'Bromine', 'Chlorine', 'Helium'),
(190, 'Copper', 'Magnesium', 'Iron', 'Calcium'),
(191, 'Graphite', 'Silicon', 'Charcoal', 'Phosphorous'),
(192, 'Tin', 'Mercury', 'Lead', 'Zinc'),
(193, 'Nitrogen', 'Hydrogen', 'Carbon Dioxide', 'Oxygen'),
(194, 'Sodium Carbonate', 'Calcium Bicarbonate', 'Sodium Bicarbonate', 'Calcium Carbonate'),
(195, 'Silicon Dioxide', 'Germanium Oxide', 'A Mixture Of Germanium Oxide And Silicon Dioxide', 'Sodium Silicate'),
(196, 'Methane', 'Nitrous Oxide', 'Carbon Dioxide', 'Hydrogen'),
(197, 'Black Solid', 'Red Liquid', 'Colourless Gas', 'Highly Inflammable Gas'),
(198, 'Biro Brothers', 'Waterman Brothers', 'Bicc Brothers', 'Write Brothers'),
(199, '1950s', '1960s', '1970s', '1980s'),
(200, 'Pneumatic Rubber Tire', 'Automobile Wheel Rim', 'Rubber Boot', 'Model Airplanes'),
(201, 'Isaac Newton', 'Albert Einstein', 'Benjamin Franklin', 'Marie Curie'),
(202, '1874', '1840', '1895', '1900'),
(203, 'Charles Richter', 'Hiram Walker', 'Giuseppe Mercalli', 'Joshua Rumble'),
(204, 'Barometer', 'Pendulum Clock', 'Microscope', 'Thermometer'),
(205, 'Diving Bell', 'Steam Boat', 'Hot Air Balloon', 'Rotary Steam Engine'),
(206, 'Yorkshire', 'Lancashire', 'Staffordshire', 'Norfolk'),
(207, 'Sir Frank Whittle', 'Gottlieb Daimler', 'Roger Bacon', 'Lewis E. Waterman'),
(208, 'Dynamite', 'Ladders', 'Race Cars', 'Parachute'),
(209, 'G. Ferdinand Von Zeppelin', 'Sir Frank Whittle', 'Roger Bacon', 'Leo H Baekeland'),
(210, 'Method', 'Native', 'Subclasses', 'Reference'),
(211, 'Interface', 'String', 'Float', 'Unsigned'),
(212, 'Public Double Methoda();', 'Public Final Double Methoda();', 'Static Void Methoda(double D1);', 'Protected Void Methoda(double D1);'),
(213, 'Init();', 'Start();', 'Run();', 'Resume();'),
(214, 'Void Run()', 'Public Void Run()', 'Public Void Start()', 'Void Run(int Priority)'),
(215, 'Run();', 'Start();', 'Stop();', 'Main();'),
(216, 'Run();', 'Construct();', 'Start();', 'Register();'),
(217, 'Notify()', 'Wait()', 'InputStream Access', 'Sleep()'),
(218, 'Object', 'Thread', 'Runnable', 'Class'),
(219, 'Public', 'Private', 'Protected', 'Transient'),
(220, '7', '10', '12', '13'),
(221, '20', '22', '23', '26'),
(222, 'CMN', 'UJI', 'VIJ', 'IJT'),
(223, 'JAK', 'HAL', 'HAK', 'JAI'),
(224, 'HGF', 'CAB', 'JKL', 'GHI'),
(225, 'Grain Growth, Recrystallisation, Stress Relief', 'Stress Relief, Grain Growth, Recrystallisation', 'Stress Relief, Recrystallisation, Grain Growth', 'Grain Growth, Stress Relief, Recrystallisation'),
(226, 'Mild Steel', 'Copper', 'Nickel', 'Aluminium'),
(227, 'Wholly Pearlite', 'Wholly Austenite', 'Pearlite And Ferrite', 'Pearlite And Cementite'),
(228, 'Low Wear Resistance', 'Low Hardness', 'Low Tensile Strength', 'Toughness'),
(229, 'Can Be Drawn Into Wires', 'Breaks With Little Permanent Distortion', 'Can Cut Another Metal', 'Can Be Rolled Or Hammered Into Thin Sheets'),
(230, 'By Adding Magnesium To Molten Cast Iron', 'By Quick Cooling Of Molten Cast Iron', 'From White Cast Iron By Annealing Process', 'None Of These'),
(231, '0.1 To 0.5', '0.5 To 1', '1 To 1.7', '1.7 To 4.5'),
(232, 'Resilience', 'Creep', 'Fatigue Strength', 'Toughness'),
(233, 'Copper And Zinc', 'Copper And Tin', 'Copper, Tin And Zinc', 'None Of These'),
(234, 'Hardening And Cold Working', 'Normalising', 'Martempering', 'Full Annealing'),
(235, 'Diplomonads Like Giardia', 'Archaea', 'Fungi', 'Animals'),
(236, 'Phosphoglycerides', 'Polyisoprenoid', 'Phospholipoprotein', 'None Of These'),
(237, 'Koch And Pasteur', 'Darwin And Woese', 'Van Leeuenhoek And Ricketts', 'Berg And Hooke'),
(238, 'Presence Of Chitin In Cell Walls', 'Presence Of Murrain In Cell Walls', 'Presence Of Proteins In Cell Walls', 'Absence Of Cell Wall Itself'),
(239, 'Christian Gram', 'Alfred Gram', 'Robertcook', 'Louis Pasteur'),
(240, 'Taxonomy', 'Anatomy', 'Genetics', 'Evolution'),
(241, 'Subspecies', 'Biovarieties', 'Erovarieties', 'All Of These'),
(242, 'Homeostasis', 'Tissues', 'Reproduction', 'Molecules'),
(243, 'Types Of Fungi', 'Small Bacteria', 'Species Of Protozoa', 'Forms Of Viruses'),
(244, 'Mitochondria', 'Chloroplasts', 'Golgi Structure', 'Mesosome'),
(245, '32 Bits', '128 Bytes', '64 Bits', '128 Bits'),
(246, 'NAT', 'Static', 'Dynamic', 'PAT'),
(247, '100 Kbps', '1 Mbps', '2 Mbps', '10 Mbps'),
(248, 'A', 'B', 'G', 'N'),
(249, 'NCP', 'ISDN', 'HDLC', 'LCP'),
(250, 'IP', 'TCP', 'UDP', 'ARP'),
(251, 'Session Layer', 'Physical Layer', 'Data Link Layer', 'Application Layer'),
(252, 'TCP', 'ARP', 'ICMP', 'BootP'),
(253, 'Never', 'Every 2 Seconds', 'Every 10 Minutes', 'Every 30 Seconds'),
(254, '1', '2', '5', '12'),
(255, '1/2', '2/5', '8/15', '9/20'),
(256, '10/21', '11/21', '2/7', '5/7'),
(257, '1/3', '3/4', '7/19', '8/21'),
(258, '1/6', '1/8', '1/9', '1/12'),
(259, '3/4', '1/4', '3/8', '7/8'),
(260, '1/2', '3/4', '3/8', '5/16'),
(261, '21/46', '25/117', '1/50', '3/25'),
(262, '1/10', '2/5', '2/7', '5/7'),
(263, '1/15', '25/57', '35/256', '1/221'),
(264, '1/6', '5/12', '1/2', '7/9'),
(265, 'Efficient', 'Treatmeant', 'Beterment', 'Employd'),
(266, 'Foreign', 'Foreine', 'Fariegn', 'Forein'),
(267, 'SRPQ', 'QPRS', 'QPSR', 'RQPS'),
(268, 'SPQR', 'QSRP', 'PSRQ', 'QPSR'),
(269, 'PQRS', 'PSRQ', 'PSQR', 'SRPQ'),
(270, 'With', 'Over', 'On', 'Round'),
(271, 'SQPR', 'SPRQ', 'SQRP', 'SRQP'),
(273, '5, 1, 2, 4, 3', '4, 2, 1, 5, 3', '1, 3, 2, 4, 5', '1, 2, 3, 5, 4'),
(274, 'Brother', 'Uncle', 'Cousin', 'Father'),
(275, 'Brother', 'Sister', 'Nephew', 'Cannot Be Determined'),
(276, 'Brother', 'Nephew', 'Uncle', 'Son-in-law'),
(277, 'Brother', 'Uncle', 'Cousin', 'Data Is Inadequate'),
(278, 'Nephew', 'Brother', 'Father', 'Maternal Uncle'),
(279, 'Daughter', 'Son', 'Nephew', 'Cannot Be Decided'),
(280, 'Mother-in-law', 'Aunt', 'Wife', 'None Of These'),
(281, 'Sister', 'Grandmother', 'Mother-in-law', 'Mother'),
(282, 'Brother', 'Grandfather', 'Husband', 'Father-in-law'),
(283, 'Mother', 'Grandmother', 'Sister', 'Daughter');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qId` int(4) NOT NULL,
  `qType` int(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `qAnswer` int(1) NOT NULL,
  `optionId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qId`, `qType`, `question`, `qAnswer`, `optionId`) VALUES
(15, 77, 'A Train Running At The Speed Of 60 Km/hr Crosses A Pole In 9 Seconds. What Is The Length Of The Train?', 4, 15),
(16, 79, 'Tickets Numbered 1 To 20 Are Mixed Up And Then A Ticket Is Drawn At Random. What Is The Probability That The Ticket Drawn Has A Number Which Is A Multiple Of 3 Or 5?', 4, 16),
(17, 77, 'A Train Running At The Speed Of 60 Km/hr Crosses A Pole In 9 Seconds. What Is The Length Of The Train?', 4, 17),
(18, 77, 'A Train 125 M Long Passes A Man, Running At 5 Km/hr In The Same Direction In Which The Train Is Going, In 10 Seconds. The Speed Of The Train Is:', 2, 18),
(19, 77, 'If One-third Of One-fourth Of A Number Is 15, Then Three-tenth Of That Number Is:', 4, 19),
(20, 77, 'Three Times The First Of Three Consecutive Odd Integers Is 3 More Than Twice The Third. The Third Integer Is:', 4, 20),
(21, 77, 'The Difference Between A Two-digit Number And The Number Obtained By Interchanging The Digits Is 36. What Is The Difference Between The Sum And The Difference Of The Digits Of The Number If The Ratio Between The Digits Of The Number Is 1 : 2 ?', 2, 21),
(22, 77, 'The Ratio Between The Length And The Breadth Of A Rectangular Park Is 3 : 2. If A Man Cycling Along The Boundary Of The Park At The Speed Of 12 Km/hr Completes One Round In 8 Minutes, Then The Area Of The Park (in Sq. M) Is:', 2, 22),
(23, 77, 'The Ratio Between The Perimeter And The Breadth Of A Rectangle Is 5 : 1. If The Area Of The Rectangle Is 216 Sq. Cm, What Is The Length Of The Rectangle?', 2, 23),
(24, 77, '3 Pumps, Working 8 Hours A Day, Can Empty A Tank In 2 Days. How Many Hours A Day Must 4 Pumps Work To Empty The Tank In 1 Day?', 4, 24),
(25, 77, 'Running At The Same Constant Rate, 6 Identical Machines Can Produce A Total Of 270 Bottles Per Minute. At This Rate, How Many Bottles Could 10 Such Machines Produce In 4 Minutes?', 2, 25),
(26, 77, 'If Log 27 = 1.431, Then The Value Of Log 9 Is:', 3, 26),
(27, 77, 'A Person Crosses A 600 M Long Street In 5 Minutes. What Is His Speed In Km Per Hour?', 2, 27),
(28, 77, 'If A Person Walks At 14 Km/hr Instead Of 10 Km/hr, He Would Have Walked 20 Km More. The Actual Distance Travelled By Him Is:', 1, 28),
(29, 77, 'The Cost Price Of 20 Articles Is The Same As The Selling Price Of X Articles. If The Profit Is 25%, Then The Value Of X Is:', 2, 29),
(30, 77, 'In A Certain Store, The Profit Is 320% Of The Cost. If The Cost Increases By 25% But The Selling Price Remains Constant, Approximately What Percentage Of The Selling Price Is The Profit?', 2, 30),
(31, 77, 'A Vendor Bought Toffees At 6 For A Rupee. How Many For A Rupee Must He Sell To Gain 20%?', 3, 31),
(32, 96, 'If 60 J Of Energy Are Available For Every 15 C Of Charge, What Is The Voltage?', 1, 32),
(33, 96, 'A Voltage Will Influence Current Only If The Circuit Is:', 4, 35),
(34, 96, 'Which Resistive Component Is Designed To Be Temperature Sensitive?', 1, 36),
(35, 96, 'A Voltmeter Is Used:', 3, 37),
(36, 96, 'Intrinsic Semiconductor Material Is Characterized By A Valence Shell Of How Many Electrons?', 3, 38),
(37, 96, 'Ionization Within A P-N Junction Causes A Layer On Each Side Of The Barrier Called The:', 2, 39),
(38, 96, 'What Causes The Depletion Region?', 2, 40),
(39, 96, 'A P-N Junction Mimics A Closed Switch When It:', 2, 41),
(40, 96, 'Solid State Devices Were First Manufactured During:', 4, 42),
(41, 96, 'Electron Pair Bonding Occurs When Atoms:', 4, 43),
(42, 96, 'How Many Valence Electrons Are In Every Semiconductor Material?', 4, 44),
(43, 96, 'What Is A Type Of Doping Material?', 2, 45),
(44, 101, 'Linear Inhibition Is Sometimes Called As', 1, 46),
(45, 101, 'The Types Of Inhibition Pattern Based On Michaelis Menten Equation Are', 4, 47),
(46, 101, 'The Rate-determining Step Of Michaelis Menten Kinetics Is', 4, 48),
(47, 101, 'Which Of These Proteases Is Not A Cysteine Active Site Protease?', 2, 49),
(48, 101, 'The Conformational Change In An Enzyme After The Substrate Is Bound That Allows The Chemical Reaction To Proceed, Can Be Explained By', 1, 50),
(49, 101, 'The Active Site Of An Enzyme Remains', 4, 51),
(50, 101, 'Which Category Of Enzymes Belongs To Class Two In The International Classification?', 3, 52),
(51, 101, 'The Reciprocal Equation For Non Competitive Inhibition Can Be Arranged To The Equation For The', 1, 53),
(52, 101, 'Which Of The Following Common Drugs Is Not A Specific Enzyme Inhibitor?', 1, 54),
(53, 101, 'In A Lineweaver-Burk Plot, Competitive Inhibitor Shows Which Of The Following Effect?', 3, 55),
(54, 99, 'An Allosteric Activator', 4, 56),
(55, 99, 'When Protein Binds Two Ligands In A Non-cooperative Manner, Then The X-intercept Of The Scatchard Plot Is', 2, 57),
(56, 99, 'A Protein That Binds Two Ligands In A Non-cooperative Manner Will Show', 4, 58),
(57, 99, 'The Specificity Of A Ligand Binding Site On A Protein Is Based On', 2, 59),
(58, 99, 'Which Of The Following (s) Is/are Serine Proteases?', 4, 60),
(59, 99, 'What Is The Specificity Of The Clostripain Protease?', 1, 61),
(60, 99, 'The Nucleophile In Serine Proteases Is', 3, 62),
(61, 99, 'Common Feature In All Serine Proteases Is A', 4, 63),
(62, 99, 'Nucleoside Is A Pyrimidine Or Purine Base', 1, 64),
(63, 99, 'In Gel Electrophoresis, What Fragments Will Move Most Quickly Through A Gel?', 2, 65),
(64, 99, 'Which Pyrimidine Base Contains An Amino Group At Carbon 4?', 1, 66),
(65, 100, 'Maximum Size Of Foreign DNA That Can Be Inserted Into A Replacement Vector Is', 3, 67),
(66, 100, 'Î» ZAP Vector Is An Example Of', 2, 68),
(67, 100, 'Select The Wrong Statement About Plasmids?', 3, 69),
(68, 100, 'Stuffer Is', 3, 70),
(69, 100, 'Conjugative Plasmids', 3, 71),
(70, 100, 'P1 Cloning Vector Allow Cloning Of DNA Of The Length Of', 1, 72),
(71, 100, 'Charon 34 And Charon 35 Can Clone DNA Upto', 3, 73),
(72, 100, 'P1 Cloning Vector Is The Example Of', 3, 74),
(73, 100, 'M 13 Is An Example Of', 3, 75),
(74, 100, 'Phagemid Vectors Are', 1, 76),
(75, 100, 'Single Stranded Vectors Are Useful', 4, 77),
(76, 100, 'Size Of The DNA That Can Be Packaged Into A Î» Phage Is', 2, 78),
(77, 100, 'Charon 34 And Charon 35 Are The Examples Of', 3, 79),
(78, 100, 'Plasmids Which Are Maintained As Limited Number Of Copies Per Cell Are Known As', 1, 80),
(79, 91, 'The Keyword Used To Transfer Control From A Function Back To The Calling Function Is', 4, 81),
(80, 91, 'Which Of The Following Function Sets First N Characters Of A String To A Given Character?', 2, 82),
(81, 91, 'The Library Function Used To Find The Last Occurrence Of A Character In A String Is', 3, 83),
(82, 91, 'Which Of The Following Function Is Used To Find The First Occurrence Of A Given String In Another String?', 3, 84),
(83, 91, 'Which Of The Following Function Is More Appropriate For Reading In A Multi-word String?', 3, 85),
(84, 91, 'Input/output Function Prototypes And Macros Are Defined In Which Header File?', 3, 86),
(85, 91, 'Which Standard Library Function Will You Use To Find The Last Occurance Of A Character In A String In C?', 4, 87),
(86, 91, 'What Is Stderr ?', 3, 88),
(87, 91, 'What Are The Different Types Of Real Data Type In C ?', 3, 89),
(88, 91, 'What Will You Do To Treat The Constant 3.14 As A Long Double?', 2, 90),
(89, 92, 'What Happens When A Class With Parameterized Constructors And Having No Default Constructor Is Used In A Program And We Create An Object That Needs A Zero-argument Constructor?', 1, 91),
(90, 92, 'For Automatic Objects, Constructors And Destructors Are Called Each Time The Objects', 1, 92),
(91, 92, 'Which Of The Following Gets Called When An Object Goes Out Of Scope?', 2, 93),
(92, 92, 'Which Of The Following Cannot Be Declared As Virtual?', 4, 94),
(93, 92, 'Which Of The Following Are NOT Provided By The Compiler By Default?', 4, 95),
(94, 92, 'How Many Default Constructors Per Class Are Possible?', 1, 96),
(95, 92, 'How Many Times A Constructor Is Called In The Life-time Of An Object?', 1, 97),
(96, 92, 'Which Of The Following Gets Called When An Object Is Being Created?', 1, 98),
(97, 92, 'Which Of The Following Statement Is Correct About Constructors?', 3, 99),
(98, 92, 'Which Of The Following Statement Is Correct Whenever An Object Goes Out Of Scope?', 3, 100),
(99, 90, 'In A Solution Containing 0.30 Kg Mole Of Solute And 600 Kg Of Solvent, The Molality Is', 1, 101),
(100, 90, 'Fenske Equation Determines The', 3, 102),
(101, 90, 'Total Reflux In A Distillation Operation Requires Minimum', 2, 103),
(102, 90, 'The Amount Of Steam Required Per Unit Quantity Of Distillate In Case Of Steam Distillation Will Be Reduced By', 3, 104),
(103, 90, 'The Difference Of Wet Bulb Temperature And Adiabatic Saturation Temperature Of Unsaturated Mixture Of Any System Is', 1, 105),
(104, 90, 'When The Temperature And Humidity Of Air Is Low, We Usually Use __________ Draft Cooling Tower.', 1, 106),
(105, 90, 'On Addition Of Solute In The Solvent, The __________ Of The Solution Decreases', 4, 107),
(106, 90, 'Which Is The Controlling Factor For A Drum Drier?', 2, 108),
(107, 90, 'Dew Point Of A Gas-vapour Mixture', 3, 109),
(108, 90, 'Which Of The Following Plays An Important Role In Problems Of Simultaneous Heat And Mass Transfer ?', 1, 110),
(109, 90, 'Make Up Water Is Required In A Cooling Tower To Replace The Water Lost By', 4, 111),
(110, 88, 'Mr. W. Simms, The Consulting Engineer To The Government Of India Recommended The Gauge For Indian Railways', 3, 112),
(111, 88, 'Lacquer Paints', 4, 113),
(112, 88, 'Wrought Iron Contains Carbon Upto', 1, 114),
(113, 88, 'Pick Up The Polymineralic Rock From The Following:', 4, 115),
(114, 88, 'Ultimate Strength To Cement Is Provided By', 2, 116),
(115, 88, 'Elastomers Can Extend Upto', 3, 117),
(116, 88, 'Bitumen Felt', 4, 118),
(117, 88, 'In The Cement The Compound Quickest To React With Water, Is', 1, 119),
(118, 88, 'The Initial Setting Time Of Lime-pozzolana, Is', 4, 120),
(119, 88, 'The Clay To Be Used For Manufacturing Bricks For A Large Project, Is Dugout And Allowed To Weather Throughout', 1, 121),
(120, 88, 'Quartzite Is A', 4, 123),
(121, 88, 'The Variety Of Pig Iron Used For Manufacture Of Wrought Iron, Is', 3, 124),
(122, 88, 'Sand Stone Is', 1, 125),
(123, 88, 'If The Furnace Is Provided With Insufficient Fuel At Low Temperatures, The Type Of Pig Iron Produced, Is Called', 3, 126),
(124, 88, 'Stainless Steel Contains', 1, 127),
(125, 88, 'Pick Up The Hypabyssal Rock From The Following:', 2, 128),
(126, 88, 'Depending On The Chemical Composition And Mechanical Properties, Iron May Be Classified As', 4, 129),
(127, 88, 'Wrought Iron Contains Carbon About', 3, 130),
(128, 89, 'From What Location Are The 1st Computer Instructions Available On Boot Up?', 1, 131),
(129, 89, 'Missing Slot Covers On A Computer Can Cause?', 1, 132),
(130, 89, 'When Installing PCI NICS You Can Check The IRQ Availability By Looking At', 4, 133),
(131, 89, 'With Respect To A Network Interface Card, The Term 10/100 Refers To', 3, 134),
(132, 89, 'Which Motherboard Form Factor Uses One 20 Pin Connector', 1, 135),
(133, 89, 'A Hard Disk Is Divided Into Tracks Which Are Further Subdivided Into:', 2, 136),
(134, 89, 'A Wrist Grounding Strap Contains Which Of The Following:', 4, 137),
(135, 89, 'Which Standard Govern Parallel Communications?', 4, 138),
(136, 89, 'What Product Is Used To Clean Smudged Keys On A Keyboard?', 4, 139),
(137, 89, 'ESD Would Cause The Most Damage To Which Component?', 2, 140),
(138, 89, 'The 34-pin Connection On An I/O Card Is For?', 1, 142),
(139, 83, 'Recently, This State Approves Garments And Apparel Policy-2017.', 3, 143),
(140, 83, 'How Many Prisoners To Be Released By Uttar Pradesh Government Recently?', 1, 144),
(141, 83, 'This State CM Has Announced 2017 As The Year Of E-Pragati.', 4, 145),
(142, 83, 'In Which State, The Death Toll Due To Swine Flu Stands At 87 In 83 Days?', 4, 146),
(143, 83, 'Which State Has Become The First Hill State In The Country To Run Electric Buses?', 1, 147),
(144, 83, 'This State Has Released A New Music Video On 9 Day Bathukamma Festival.', 1, 148),
(145, 83, 'Which State Became The First In India To Introduce Electric Buses?', 2, 149),
(146, 83, 'Which State Is Hosting The 5th Edition Of &quot;Kaju India 2017- The Global Cashew Summit&quot;?', 2, 150),
(147, 83, 'Which Team Has Won The 2017 Kalpathi AGS - Buchi Babu All-India Invitation Cricket Tournament?', 4, 151),
(148, 83, 'This State Decided To Ban Manufacture And Use Of Plastic Packaging Materials Of Less Than 51 Microns.', 2, 152),
(149, 83, 'Which State Became The First State To Set Up District Family Welfare?', 3, 153),
(150, 95, 'Which Of The Following Products Was An Early Implementation Of The Relational Model Developed By E.F. Codd Of IBM?', 2, 154),
(151, 95, 'The Following Are Components Of A Database Except ________ .', 3, 155),
(152, 95, 'An On-line Commercial Site Such As Amazon.com Is An Example Of A(n) ________ .', 3, 156),
(153, 95, 'SQL Stands For ________ .', 1, 157),
(154, 95, 'The Following Are Functions Of A DBMS Except ________ .', 1, 158),
(155, 95, 'Helping People Keep Track Of Things Is The Purpose Of A(n) ________ .', 1, 159),
(156, 95, 'Which Of The Following Is Not Considered To Be A Basic Element Of An Enterprise-class Database System?', 4, 160),
(157, 95, 'A Data Warehouse Uses:', 2, 161),
(158, 95, 'Duplicate Data Often Results In Loss Of Data Integrity Because', 3, 162),
(159, 95, 'A Database Application Can Perform Which Of The Following Activities?', 4, 163),
(160, 95, 'A Shared Database Should:', 4, 164),
(161, 97, 'The Output Of An AND Gate With Three Inputs, A, B, And C, Is HIGH When ________.', 3, 165),
(162, 97, 'If A 3-input NOR Gate Has Eight Input Possibilities, How Many Of Those Possibilities Will Result In A HIGH Output?', 1, 166),
(163, 97, 'If A Signal Passing Through A Gate Is Inhibited By Sending A LOW Into One Of The Inputs, And The Output Is HIGH, The Gate Is A(n):', 2, 167),
(164, 97, 'A Device Used To Display One Or More Digital Signals So That They Can Be Compared To Expected Timing Diagrams For The Signals Is A:', 3, 168),
(165, 97, 'When Used With An IC, What Does The Term &quot;QUAD&quot; Indicate?', 2, 169),
(166, 97, 'TTL Operates From A ________.', 4, 170),
(167, 97, 'The Output Of A NOR Gate Is HIGH If ________.', 4, 171),
(168, 97, 'The Switching Speed Of CMOS Is Now ________.', 1, 172),
(169, 97, 'What Does The Small Bubble On The Output Of The NAND Gate Logic Symbol Mean?', 3, 173),
(170, 97, 'What Are The Pin Numbers Of The Outputs Of The Gates In A 7432 IC?', 3, 174),
(171, 97, 'How Many Inputs Of A Four-input AND Gate Must Be HIGH In Order For The Output Of The Logic Gate To Go HIGH?', 4, 175),
(172, 84, 'Eritrea, Which Became The 182nd Member Of The UN In 1993, Is In The Continent Of', 2, 177),
(173, 84, 'Eritrea, Which Became The 182nd Member Of The UN In 1993, Is In The Continent Of', 2, 178),
(174, 84, 'Garampani Sanctuary Is Located At', 2, 179),
(175, 84, 'For Which Of The Following Disciplines Is Nobel Prize Awarded?', 4, 180),
(176, 84, 'Hitler Party Which Came Into Power In 1933 Is Known As', 2, 181),
(177, 84, 'FFC Stands For', 2, 182),
(178, 84, 'Fastest Shorthand Writer Was', 1, 183),
(179, 84, 'Epsom (England) Is The Place Associated With', 1, 184),
(180, 84, 'First Human Heart Transplant Operation Conducted By Dr. Christiaan Barnard On Louis Washkansky, Was Conducted In', 1, 185),
(181, 84, 'Federation Cup, World Cup, Allywyn International Trophy And Challenge Cup Are Awarded To Winners Of', 2, 186),
(182, 84, 'Each Year World Red Cross And Red Crescent Day Is Celebrated On', 1, 187),
(183, 85, 'Brass Gets Discoloured In Air Because Of The Presence Of Which Of The Following Gases In Air?', 2, 188),
(184, 85, 'Which Of The Following Is A Non Metal That Remains Liquid At Room Temperature?', 2, 189),
(185, 85, 'Chlorophyll Is A Naturally Occurring Chelate Compound In Which Central Metal Is', 2, 190),
(186, 85, 'Which Of The Following Is Used In Pencils?', 1, 191),
(187, 85, 'Which Of The Following Metals Forms An Amalgam With Other Metals?', 2, 192),
(188, 85, 'The Gas Usually Filled In The Electric Bulb Is', 1, 193),
(189, 85, 'Washing Soda Is The Common Name For', 1, 194),
(190, 85, 'Quartz Crystals Normally Used In Quartz Clocks Etc. Is Chemically', 1, 195),
(191, 85, 'Which Of The Gas Is Not Known As Green House Gas?', 4, 196),
(192, 85, 'Bromine Is A', 2, 197),
(193, 86, 'Who Invented The BALLPOINT PEN?', 1, 198),
(194, 86, 'In Which Decade Was The First Solid State Integrated Circuit Demonstrated?', 1, 199),
(195, 86, 'What J. B. Dunlop Invented?', 1, 200),
(196, 86, 'Which Scientist Discovered The Radioactive Element Radium?', 4, 201),
(197, 86, 'When Was Barb Wire Patented?', 1, 202),
(198, 86, 'What Is The Name Of The CalTech Seismologist Who Invented The Scale Used To Measure The Magnitude Of Earthquakes?', 1, 203),
(199, 86, 'What Galileo Invented?', 4, 204),
(200, 86, 'What James Watt Invented?', 4, 205),
(201, 86, 'Where Is The Village Of Branston, After Which The Famous Pickle Is Named?', 3, 206),
(202, 86, 'Who Invented Jet Engine?', 1, 207),
(203, 86, 'What Invention Caused Many Deaths While Testing It?', 4, 208),
(204, 86, 'Who Invented Gunpowder?', 3, 209),
(205, 93, 'Which Is A Reserved Word In The Java Programming Language?', 2, 210),
(206, 93, 'Which Is A Valid Keyword In Java?', 1, 211),
(207, 93, 'Which Is The Valid Declarations Within An Interface Definition?', 1, 212),
(208, 93, 'What Is The Name Of The Method Used To Start A Thread Execution?', 2, 213),
(209, 93, 'Which Method Must Be Defined By A Class Implementing The Java.lang.Runnable Interface?', 2, 214),
(210, 93, 'Which Will Contain The Body Of The Thread?', 1, 215),
(211, 93, 'Which Method Registers A Thread In A Thread Scheduler?', 3, 216),
(212, 93, 'Which Of The Following Will Not Directly Cause A Thread To Stop?', 1, 217),
(213, 93, 'Which Class Or Interface Defines The Wait(), Notify(),and NotifyAll() Methods?', 1, 218),
(214, 93, 'You Want Subclasses In Any Package To Have Access To Members Of A Superclass. Which Is The Most Restrictive Access That Accomplishes This Objective?', 3, 219),
(215, 81, 'Look At This Series: 7, 10, 8, 11, 9, 12, ... What Number Should Come Next?', 2, 220),
(216, 81, 'Look At This Series: 36, 34, 30, 28, 24, ... What Number Should Come Next?', 2, 221),
(217, 81, 'SCD, TEF, UGH, ____, WKL', 3, 222),
(218, 81, 'FAG, GAF, HAI, IAH, ____', 1, 223),
(219, 81, 'QPO, NML, KJI, _____, EDC', 1, 224),
(220, 87, 'Specify The Sequence Correctly', 3, 225),
(221, 87, 'Which Of The Following Material Has Maximum Ductility?', 1, 226),
(222, 87, 'An Eutectoid Steel Consists Of', 1, 227),
(223, 87, 'Shock Resisting Steels Should Have', 4, 228),
(224, 87, 'The Hardness Is The Property Of A Material Due To Which It', 3, 229),
(225, 87, 'Malleable Cast Iron Is Produced', 3, 230),
(226, 87, 'The Percentage Of Carbon In Cast Iron Varies From', 4, 231),
(227, 87, 'The Ability Of A Material To Absorb Energy In The Plastic Range Is Called', 1, 232),
(228, 87, 'Brass Is An Alloy Of', 1, 233),
(229, 87, 'The Hardness And Tensile Strength In Austenitic Stainless Steel Can Be Increased By', 1, 234),
(230, 98, 'The Oldest Eukaryotic Organisms Are Considered To Be', 2, 235),
(231, 98, 'The Phospholipids Present In Cytoplasm Membrane Of Eubacteria Is Mainly', 1, 236),
(232, 98, 'Which Were The Investigators Lived At The Same Time?', 1, 237),
(233, 98, 'Mycoplasmas Are Different From The Other Prokaryotes By', 4, 238),
(234, 98, 'Gram Staining Was Introduced By', 1, 239),
(235, 98, 'Which Of The Following Is Considered The Most Unifying Concept In Biology?', 4, 240),
(236, 98, 'Various Bacterial Species Can Be Subdivided Into', 4, 241),
(237, 98, 'Living Organisms Have Many Complex Characteristics. Which One Of The Following Is Shared By Non-living Matter As Well?', 4, 242),
(238, 98, 'Mycoplasmas, Rickettsiae, And Chlamydiae Are', 2, 243),
(239, 98, 'Which Of The Following Structure Is Absent In Eukaryotic Cells?', 4, 244),
(240, 94, 'How Long Is An IPv6 Address?', 4, 245),
(241, 94, 'What Flavor Of Network Address Translation Can Be Used To Have One IP Address Allow Many Users To Connect To The Global Internet?', 4, 246),
(242, 94, 'You Have 10 Users Plugged Into A Hub Running 10Mbps Half-duplex. There Is A Server Connected To The Switch Running 10Mbps Half-duplex As Well. How Much Bandwidth Does Each Host Have To The Server?', 4, 247),
(243, 94, 'Which WLAN IEEE Specification Allows Up To 54Mbps At 2.4GHz?', 3, 248),
(244, 94, 'What Protocol Does PPP Use To Identify The Network Layer Protocol?', 1, 249),
(245, 94, 'Which Protocol Does DHCP Use At The Transport Layer?', 3, 250),
(246, 94, 'Where Is A Hub Specified In The OSI Model?', 2, 251),
(247, 94, 'Which Protocol Is Used To Send A Destination Network Unknown Message Back To Originating Hosts?', 3, 252),
(248, 94, 'How Often Are BPDUs Sent From A Layer 2 Device?', 2, 253),
(249, 94, 'How Many Broadcast Domains Are Created When You Segment A Network With A 12-port Switch?', 1, 254),
(250, 79, 'Tickets Numbered 1 To 20 Are Mixed Up And Then A Ticket Is Drawn At Random. What Is The Probability That The Ticket Drawn Has A Number Which Is A Multiple Of 3 Or 5?', 4, 255),
(251, 79, 'A Bag Contains 2 Red, 3 Green And 2 Blue Balls. Two Balls Are Drawn At Random. What Is The Probability That None Of The Balls Drawn Is Blue?', 1, 256),
(252, 79, 'In A Box, There Are 8 Red, 7 Blue And 6 Green Balls. One Ball Is Picked Up Randomly. What Is The Probability That It Is Neither Red Nor Green?', 1, 257),
(253, 79, 'What Is The Probability Of Getting A Sum 9 From Two Throws Of A Dice?', 3, 258),
(254, 79, 'Three Unbiased Coins Are Tossed. What Is The Probability Of Getting At Most Two Heads?', 4, 259),
(255, 79, 'Two Dice Are Thrown Simultaneously. What Is The Probability Of Getting Two Numbers Whose Product Is Even?', 2, 260),
(256, 79, 'In A Class, There Are 15 Boys And 10 Girls. Three Students Are Selected At Random. The Probability That 1 Girl And 2 Boys Are Selected, Is:', 1, 261),
(257, 79, 'In A Lottery, There Are 10 Prizes And 25 Blanks. A Lottery Is Drawn At Random. What Is The Probability Of Getting A Prize?', 3, 262),
(258, 79, 'From A Pack Of 52 Cards, Two Cards Are Drawn Together At Random. What Is The Probability Of Both The Cards Being Kings?', 4, 263),
(259, 79, 'Two Dice Are Tossed. The Probability That The Total Score Is A Prime Number Is:', 2, 264),
(260, 80, 'Find The Correctly Spelt Words.', 1, 265),
(261, 80, 'Find The Correctly Spelt Words.', 1, 266),
(262, 80, 'It Has Been Established That P :	Einstein Was Q :	Although A Great Scientist R :	Weak In Arithmetic S :	Right From His School Days The Proper Sequence Should Be:', 2, 267),
(263, 80, 'Then P :	It Struck Me Q :	Of Course R :	Suitable It Was S :	How Eminently The Proper Sequence Should Be:', 3, 268),
(264, 80, 'I Read An Advertisement That Said P :	Posh, Air-conditioned Q :	Gentleman Of Taste R :	Are Available For S :	Fully Furnished Rooms The Proper Sequence Should Be:', 2, 269),
(265, 80, 'Pick Out The Most Effective Word(s) From The Given Words To Fill In The Blank To Make The Sentence Meaningfully Complete. Fate Smiles ...... Those Who Untiringly Grapple With Stark Realities Of Life.', 3, 270),
(266, 80, 'S1:	Ants Eat Worms, Centipedes And Spiders. P :	They Are Usually Much Quicker Than The Ant Itself. Q :	Nevertheless, These Animals Do Not Make Easy Game For Ants. R :	Besides, They Have An Extraordinary Number Of Ways Of Escaping. S :	They Also Eat Larvae And Insect Adults Such As Flies, Moths And Spring Tails. S6:	Some Jump, And Some Give Out A Pungent Repellent Substance. The Proper Sequence Should Be:', 1, 271),
(267, 82, 'Arrange The Words Given Below In A Meaningful Sequence. 1. Key	2. Door	3. Lock 4. Room	5. Switch On', 3, 273),
(268, 82, 'Pointing To A Photograph Of A Boy Suresh Said, &quot;He Is The Son Of The Only Son Of My Mother.&quot; How Is Suresh Related To That Boy?', 4, 274),
(269, 82, 'If A Is The Brother Of B; B Is The Sister Of C; And C Is The Father Of D, How D Is Related To A?', 4, 275),
(270, 82, 'Introducing A Boy, A Girl Said, &quot;He Is The Son Of The Daughter Of The Father Of My Uncle.&quot; How Is The Boy Related To The Girl?', 1, 276),
(271, 82, 'Pointing To A Photograph Lata Says, &quot;He Is The Son Of The Only Son Of My Grandfather.&quot; How Is The Man In The Photograph Related To Lata?', 1, 277),
(272, 82, 'Pointing To A Photograph. Bajpai Said, &quot;He Is The Son Of The Only Daughter Of The Father Of My Brother.&quot; How Bajpai Is Related To The Man In The Photograph?', 4, 278),
(273, 82, 'Pointing A Photograph X Said To His Friend Y, &quot;She Is The Only Daughter Of The Father Of My Mother.&quot; How X Is Related To The Person Of Photograph?', 2, 279),
(274, 82, 'Veena Who Is The Sister-in-law Of Ashok, Is The Daughter-in-law Of Kalyani. Dheeraj Is The Father Of Sudeep Who Is The Only Brother Of Ashok. How Kalyani Is Related To Ashok?', 4, 280),
(275, 82, 'Pointing To A Woman, Abhijit Said, &quot;Her Granddaughter Is The Only Daughter Of My Brother.&quot; How Is The Woman Related To Abhijit?', 4, 281),
(276, 82, 'Amit Said - &quot;This Girl Is The Wife Of The Grandson Of My Mother&quot;. How Is Amit Related To The Girl?', 4, 282),
(277, 82, 'Pointing Towards A Man, A Woman Said, &quot;His Mother Is The Only Daughter Of My Mother.&quot; How Is The Woman Related To The Man?', 1, 283);

-- --------------------------------------------------------

--
-- Table structure for table `questiontype`
--

CREATE TABLE `questiontype` (
  `qTypeId` int(10) NOT NULL,
  `questionType` varchar(200) NOT NULL,
  `catId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questiontype`
--

INSERT INTO `questiontype` (`qTypeId`, `questionType`, `catId`) VALUES
(77, 'Arithmetic Aptitudes', 119),
(79, 'Probability', 119),
(80, 'Verbal Ability', 120),
(81, 'Logical Reasoning', 120),
(82, 'Verbal Reasoning', 120),
(83, 'Current Affairs', 121),
(84, 'General Knowledge', 121),
(85, 'General Science', 121),
(86, 'Inventions', 121),
(87, 'Mechanical Engineering', 123),
(88, 'Civil Engineering', 123),
(89, 'CSE', 123),
(90, 'Chemical Engineering', 123),
(91, 'C Programming', 124),
(92, 'C++ Programming', 124),
(93, 'Java Programming', 124),
(94, 'Networking Questions', 125),
(95, 'Database Questions', 125),
(96, 'Basic Electronics', 125),
(97, 'Digital Electronics', 125),
(98, 'Microbiology', 126),
(99, 'Biochemistry', 126),
(100, 'Biotechnology', 126),
(101, 'Biochemical Engineering', 126),
(102, 'Aptitude', 120),
(103, 'Xyz', 127);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `fname` text NOT NULL,
  `lName` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `emailId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`fname`, `lName`, `mobile`, `emailId`) VALUES
('Revathy', 'Mohandas', '9988444445', 'appu023.mohandas@gmail.com'),
('Tony', 'Manuel', '9999999999', 'sakina.naaz@mca.christuniversity.in');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `userId` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privilege` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userId`, `password`, `privilege`, `status`) VALUES
('admin', 'password', 'high', 'active'),
('appu023.mohandas@gmail.com', 'Ux6Yqo', 'High', 'pending'),
('sakina.naaz@mca.christuniversity.in', 'ggmBq4', 'High', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Firstname`, `Lastname`, `Email`, `Password`) VALUES
('tony', 'manuel', 'tony@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `usertest`
--

CREATE TABLE `usertest` (
  `id` int(5) NOT NULL,
  `userId` varchar(50) NOT NULL,
  `testId` int(2) NOT NULL,
  `totalQuestions` int(2) NOT NULL,
  `marks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertest`
--

INSERT INTO `usertest` (`id`, `userId`, `testId`, `totalQuestions`, `marks`) VALUES
(14, 'sample', 123, 10, 0),
(15, 'sample', 120, 5, 0),
(16, 'sample', 121, 20, 0),
(17, 'sample', 120, 10, 0),
(18, 'sample', 120, 10, 0),
(19, 'sample', 119, 10, 1),
(20, 'sample', 120, 10, 1),
(21, 'sample', 119, 10, 2),
(22, 'sample', 119, 10, 3),
(23, 'sample', 119, 10, 3),
(24, 'sample', 119, 10, 1),
(25, 'sample', 119, 10, 2),
(26, 'sample', 120, 10, 1),
(27, 'sample', 120, 10, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qoptions`
--
ALTER TABLE `qoptions`
  ADD PRIMARY KEY (`optionId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qId`);

--
-- Indexes for table `questiontype`
--
ALTER TABLE `questiontype`
  ADD PRIMARY KEY (`qTypeId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qoptions`
--
ALTER TABLE `qoptions`
  MODIFY `optionId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `questiontype`
--
ALTER TABLE `questiontype`
  MODIFY `qTypeId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
