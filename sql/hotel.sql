-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 04:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(512) NOT NULL,
  `pricemax` int(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `facility` varchar(512) NOT NULL,
  `location` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `price`, `pricemax`, `description`, `facility`, `location`, `img`, `contact`) VALUES
(1, 'Hyatt Regency Kathmandu', '14659', 15, 'Hyatt Regency Kathmandu is a five-star luxury hotel and resort in Kathmandu,  set on 37 acres of landscaped grounds and created in the traditional Newari style of Nepalese architecture. This beautiful hotel and resort is located on the road to the Boudhanath Stupa: the most holy of all Tibetan Buddhist shrines outside of Tibet and a UNESCO World Heritage Site located within a five-minute walk from the hotel. The hotel is just four kilometres (2.4 miles) from the Tribhuvan International Airport and six kilom', 'Free Internet Access, Free Parking, Restaurant On-Site, Room Service, Digital Key, Business Services, Resort Property, Laundry, Concierge, Meeting Facilities, Fitness Center, Spa', 'kathmandu', 'Hyatt Regency.jpg', '+977 1 517 1234'),
(3, 'Radisson Hotel Kathmandu', '17235', 0, 'Located in the heart of Nepal', 'Free Internet Access, Free Parking, Concierge service, Early check-in, Accessibility, Airport shuttle, Bar, Breakfast, Spa, Room service, Express check-out, Fitness center, In-room safe, Laundry service, Meeting facilities, On-site dining, Valet parking', 'kathmandu', 'radisson.jpg', '+977 1 4411818'),
(4, 'Hotel Yak & Yeti', '11650', 0, 'Yak and Yeti is a heritage hotel located in Durbar Marg, the thriving city center of Kathmandu Valley, in a prime location that is minutes walking distance from the former Royal Palace. Durbar marg is a commercial area with high-end shops and a variety of food options. Our 5 star deluxe luxury property is 6 KM away from the Tribhuvan International Airport, about 1 KM from the famous tourist hub of Nepal- Thamel.', 'Business Center, Free Parking, Travel Desk, Beauty Parlour & coiffeur, Casino Royale, Deluxe Room, Club Shangri-La, Regal Ballroom, Regency Hall, Conference & Events', 'kathmandu', 'yak.jpg', '+977 1 4248999, +977 1 4240520'),
(5, 'The Everest Hotel', '11800', 0, 'The Everest Hotel is located just 3 Kms from Kathmandu International Airport and International Convention Centre and conveniently established at a place surrounded by Tourist hotspots, shopping Centre, Pashupatinath and Changu Narayan Temple. View of the mountains in the heart of city & Nepali Culture, these vistas are best admired from the hotel', '24 Hour Front Desk, Travel Desk, Wake Up Calls, Local Newspaper/s, Dry Cleaning / Laundry Service, Concierge, Luggage Storage, Cafe, Bar / Lounge, Room Service - 24hr, Conference/Meeting Facilities, Interconnecting Rooms, Non Smoking, Pets Not Allowed, Lift/Elevator, Credit Cards Accepted, Shops, Suites, Wheelchair Accessible, Gym/Fitness Room, Kids Pool, Family Rooms, Interconnecting Rooms, Eco-Friendly, Outdoor Pool - Unheated, On-site Car Parking, Street Parking,', 'kathmandu', 'everest.jpg', '+977-1-4780100'),
(6, 'Meghauli Serai', '30976', 0, 'Standing on the banks of the river Rapti, Meghauli Serai overlooks a vast expanse of rippling waters and the core of Chitwan National Park. This 30 room luxurious jungle safari resort in Chitwan National Park is designed to showcase the spectacular wilderness and rooms as well as guest areas afford uninterrupted views of the jungle. The main lounge with an imposing chandelier made with 10,000 Nepalese hand painted beads. The lodge embraces local d?cor and aesthetics with an abundant use of local art and art', 'Free WiFi, accommodation of a spa bath, Air Conditioned Rooms, Minibar, Private Bathroom, Outdoor Pool, On-site Restaurant Meal, Car Hire, Jungle Safari', 'chitwan', 'meghauli.jpg', '+91 1800 111 1825'),
(7, 'Barahi Jungle Lodge', '22873', 0, 'Barahi Jungle Lodge situated in the pacific Chitwan, reflects the serenity of the National Park. Chitwan', 'Spacious bathroom, Private balconies with panoramic views of the river and National Park, Wildlife-inspired d?cor and artifacts, Daily Housekeeping service, Laundry service, Dining, Private Campfire, Nature Walks, Canoeing, Cultural Performance, Bullock Cart Village Visit, Jeep Safari, spa, pool', 'chitwan', 'barahi.jpg', ' 977-1- 4411113, 4415735, 4429820, 4410480'),
(8, 'Baber Mahal Vilas', '18439', 0, 'The vision behind the boutique property is to create a hospitality model where in, luxury and service are provided in a historically and culturally significant ambience in the center Kathmandu Valley. To host our guests in an atmosphere that illustrates the grand lifestyle of the Rana era mixed with the original architectural heritage of Newar, Mustang and Terai cultures. Though modest in size the property is attached to Baber Mahal Revisited complex. Acting as an extension to the Vilas, Revisited offers a ', 'Daily Housekeeping, 24 Hour Front Desk, Swimming Pool, Library, Wi-Fi, Shops', 'kathmandu', 'baber.jpg', '+977-01-4257655/4248747'),
(9, 'Shanta Ghar', '944', 0, 'Shanta Ghar (peace home) is a rustic natural Eco resort in the remote grassland area of beautiful Madi all surrounded by Chitwan National Park.', 'Facilities for disabled guest, Free Wi-Fi, Ticket services, Water park, Hiking, Tours, Bar, BBQ facilities, Room service, Shared kitchen, Rental car, Shops, Food delivery', 'Chitwan', 'shanta.jpg', '+977-985-5052016'),
(10, 'Gokarna Forest Resort', '15630', 0, 'Set amidst Kathmandu Valley, Gokarna Forest Resort offers accommodation with breathtaking views of the Gokarna Forest. Set in the Gokarna Protected Forest, this refined resort is 7 km from the Pashupatinath Temple and 12 km from Kathmandu Durbar Square.', 'Free WIFI, refined forest resort offering a golf course, a pool, spa, health club, bar, dining options', 'kathmandu', 'gokarna.jpg', '+01-4451212'),
(11, 'The Pavilions Himalayas', '27024', 0, 'Nestled in the natural paradise of a lushly forested valley and set against the backdrop of the majestic Himalayan mountain range, The Pavilions Himalayas is a truly eco-sensitive luxury resort that gives back to the local community. Breathe, hike, explore the beauty of Nepal beyond your expectations. Set on our organic farm, guests enjoy the natural beauty of Pokhara, the gateway to the Annapurna Himalayas.', 'Free Internet Access, Free Parking, Concierge service, Early check-in, Accessibility, Airport shuttle, Bar, Breakfast, Spa, Room service, Express check-out, Fitness center, In-room safe, Laundry service, Meeting facilities, On-site dining, Valet parking', 'pokhara', 'pavilion.jpg', '+977 61 694379 | +977 975600 8117'),
(12, 'Hotel Royal Century', '5844', 0, 'Enjoy a striking destination inspired by the extraordinary landscape, melding the offerings of thrilling business amenities and a relaxing periphery.', 'Spa,Free WIFI,Swimming POOL,Air-Conditioning,Parking', 'chitwan', 'royal.jpg', '(977)-56-525865'),
(13, 'Hotel Pokhara Grande', '8941', 0, 'Pokhara Grande is the five star hotel of Pokhara, Nepal providing the right blend of service, luxury and quiet efficiency. Internationally acclaimed for all-round excellence and unparalleled levels of service, we have got our name listed among 10 best hotels of Nepal.', 'Swimming pool, Gymanisum, Spa, WIFI, Parking', 'pokhara', 'grande.jpg', '+977-061-460210'),
(14, 'Tiger Palace Resort', '7890', 0, 'Tiger Palace Resort is in Bhairahawa, in the fertile, subtropical Terai region of Nepal. Situated to the south of the legendary Himalayas, the resort is easily accessible from India or Kathmandu, offering guests a sophisticated and thrilling getaway.', 'Spa, Free WIFI, Swimming Pool, Fitness, Casino, Room Service', 'lumbini', 'tiger.jpg', '+977 71512000'),
(15, 'The Fulbari Resort & Spa', '9000', 0, 'For travelers who want to take in the sights and sounds of Pokhara, The Fulbari Resort & Spa is the perfect choice. The city center is merely 4.0 km away and the airport can be reached within 15 minutes. A haven of rest and relaxation, the hotel will offer total renewal just steps away from the city', 'Fitness Center, Golf Course(on-site), Hot Tub, Spa, Swimming Pool, Bar, Tennis Court, NightClub', 'pokhara', 'fulbari.jpg', '061-432451');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `hotel_id` int(255) NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `hotel_id`, `reviews`, `rating`, `username`) VALUES
(39, 80, 'noice...', 5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(1, 'admin', 'admin@123', 'Milan', 'Manandhar', 'milan.98112@gmail.com'),
(9, 'milan', '12345', 'Milan', 'Manandhar', 'milan.98112@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
