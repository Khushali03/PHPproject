-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(1) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'group10', 'kap');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `book_id` int(5) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `dest_id` int(5) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `book_venue` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`book_id`, `cust_email`, `dest_id`, `from_date`, `to_date`, `book_venue`, `status`, `posting_date`) VALUES
(1, 'muskan@gmail.com', 1, '2023-02-02', '2023-02-07', 'Heritage-venue', 1, '2023-03-01 04:46:09'),
(2, 'muskan@gmail.com', 2, '2023-03-11', '2023-03-14', 'Five-star-venue', 2, '2023-03-01 04:47:56'),
(3, 'mittal@gmail.com', 1, '2023-03-03', '2023-03-06', 'Heritage-venue', 1, '2023-03-01 05:01:39'),
(4, 'mittal@gmail.com', 2, '2023-03-03', '2023-03-20', 'Five-star-venue', 0, '2023-03-01 16:20:53'),
(5, 'mittal@gmail.com', 4, '2023-03-04', '2023-04-07', 'Heritage-venue', 1, '2023-03-01 17:01:57'),
(6, 'mittal@gmail.com', 8, '2023-02-28', '2023-03-15', 'Heritage-venue', 3, '2023-03-02 04:07:18'),
(7, 'krishiv@gmail.com', 11, '2023-03-08', '2023-03-18', 'Five-star-venue', 2, '2023-03-02 04:23:59'),
(8, 'krishiv@gmail.com', 5, '2023-03-03', '2023-03-12', 'Heritage-venue', 1, '2023-03-02 04:25:05'),
(9, 'anjali@gmail.com', 1, '2023-03-02', '2023-03-03', 'Heritage-venue', 1, '2023-03-02 09:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `cust_tbl`
--

CREATE TABLE `cust_tbl` (
  `cust_id` int(5) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_tbl`
--

INSERT INTO `cust_tbl` (`cust_id`, `cust_name`, `address`, `country`, `state`, `city`, `phoneno`, `email`, `pincode`, `password`) VALUES
(1, 'anjali', 'ambika nagar', 'India', 'Gujarat', 'Disa', 7984392062, 'anjali@gmail.com', 385535, '$2y$10$7wDvxi3Bj0keK5D7HUjZ7erhHIy6XVW5nisjTYRPqHIZEhjnxdrCu');

-- --------------------------------------------------------

--
-- Table structure for table `dest_tbl`
--

CREATE TABLE `dest_tbl` (
  `dest_id` int(5) NOT NULL,
  `dest_name` varchar(30) NOT NULL,
  `dest_detail` text NOT NULL,
  `dest_img` varchar(2000) NOT NULL,
  `dest_price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dest_tbl`
--

INSERT INTO `dest_tbl` (`dest_id`, `dest_name`, `dest_detail`, `dest_img`, `dest_price`) VALUES
(1, 'The Taj Lake Palace', 'In the Condé Nast Traveler Readers Choice Awards 2019, two palace hotels in Rajasthan were named among the top 10 Best Hotels In The World.\r\n\r\n\r\nTaj Lake Palace Udaipur is ranked 3 in the Best Hotels in the World list, followed by Rambagh Palace Jaipur, which is ranked 7. These are the only two Indian hospitality brands in the top ten.\r\n\r\n\r\nIf you want your wedding to have a regal look, you can go to the most romantic hotel in the most romantic location on the subcontinent. The Royal Wedding Destination The Taj Lake Palace is a well-known five-star hotel that youve probably seen in movies and television shows. The James Bond film Octopussy was shot at Taj Lake Palace in 1984. The hotel welcomes guests with a rose petal shower as they disembark from the boat at the jetty.\r\n\r\n\r\nThe Taj, which has a beautiful view of Lake Pichola, the hotel courtyard, and the city palace, is recommended by the Best Wedding Planner in Udaipur for a destination wedding in Udaipur. There is also free Wi-Fi available there. Aside from the above services, there is a pool, a yoga-focused fitness center, and specialized disabled facilities. Allow your friends and relatives children to freely swim in the pool during designated hours.\r\n\r\n\r\nUdaipur airport is 26 kilometers away, and the Taj Lake Palace Udaipur is a scenic 40-minute drive away. The Udaipur railway station is 4.5 kilometers away, and the city center is 1 kilometer away, making it easily accessible while staying in its world.\r\n\r\nWedding Venues\r\n\r\nWith some of the best views in the city, the palace provides seamless venues for grand occasions. Every wedding venue has the most up-to-date audio-visual equipment and technical support to make the event run smoothly.\r\n\r\nOnly Taj Lake Palace can give its prestigious and lucky guests the most beautiful wedding venue: Mewar Mahal\r\n\r\nIf you want to get married at this strange place, make sure you have a small wedding with just your closest friends and family.\r\n', '1677663279.jpg', 100000),
(2, 'The Oberoi Udaivilas', 'Udaipur is fast emerging as a popular destination for royal Indian weddings. Couples can choose their budget-friendly royal wedding venue in Udaipur from many fascinating palaces including The Devi Garh, Oberoi Udaivilas and Taj Lake Palace etc.\r\n\r\nThe Oberoi Udaivilas Udaipur is located on the banks of Lake Pichola in Udaipur of Rajasthan a Northwest province of India. Udaipur also called the City of Dawn, surrounded by the ancient Aravalli Mountains and set on the edge of three lakes, is a brilliant kaleidoscope of narrow lanes flanked by bright stalls gardens lakes palaces and temples. It has 3 restaurants, 2 heated outdoor pools and a luxurious spa With 89 rooms and suites, luxury is beyond imagination. This large property was once the belonging of the Maharana of Mewar. This luxury five-star hotel is the epitome of the city itself. Also, The Oberoi Udaivilas played a perfect host to the team Yeh Jawaani Hai Deewani which shot most of Kalkis wedding scene at the heritage property.\r\n\r\nThe mega style and royal decors of palace weddings are a great fascination to various outsiders who want to celebrate their most auspicious moment of life in Udaivilas. Wedding couples can tie the knot at The Oberoi Udaivilas Udaipur, in India following the customs and traditions of Hindu, Christian or any religion. Couples from all over the world want to tie the knot at The Oberoi Udaivilas with a grand celebration.\r\n\r\n', '../uploads/oberoi-udaivilas.jpg', 95000),
(3, 'The Leela Place', 'Welcome to the only modern five-star palace hotel on the banks of the majestic Lake Pichola, rated as the Worlds Best Hotel 2019 by New Yorks world-famous travel magazine Travel  Leisure, with breathtaking views of the lake, City Palace, and the Aravalli mountains.\r\n\r\n\r\nThe Leela Palace Udaipur, a five-star luxury hotel and resort in Udaipur, was named number one on the list of the best-100 hotels in the world. The Leela Palace Group is ranked 10th among the worlds top 25 hotel brands.\r\n\r\n\r\nThe hotel has 72 luxurious rooms and 8 suites with spectacular views of Lake Pichola. In addition, the hotel has a huge banquet hall that can handle a large number of people. The rooms and suites at The Leela Palace Udaipur have elegant and contemporary interiors that exemplify Rajasthani palace architecture and invoke the grandeur of Udaipurs rich heritage and royal culture. According to the best wedding planner in Udaipur, the luxury hotel Leela palace is a perfect location for a wedding destination or special celebrations.\r\n\r\n\r\nLeela Palace Udaipur Wedding Package When it comes to hospitality, the Leela Palace Udaipur wedding venue is a household name. Every occasion is made unique and extraordinary by its stunning lake views combined with modern amenities. The facility spans thousands of acres, making it suitable for both small and large events. Its central location is an added benefit, allowing guests from all parts of the city easy access through airports, railways, and automobiles. The five-star palace cum hotels banquet and verdant gardens are some of the royal wedding venues.\r\n\r\nLeela Palace Udaipur Wedding Package When it comes to hospitality, the Leela Palace Udaipur wedding venue is a household name. Every occasion is made unique and extraordinary by its stunning lake views combined with modern amenities. The facility spans thousands of acres, making it suitable for both small and large events. Its central location is an added benefit, allowing guests from all parts of the city easy access through airports, railways, and automobiles. The five-star palace cum hotels banquet and verdant gardens are some of the royal wedding venues.\r\n\r\n\r\nLeela Palace Udaipur Destination WeddingThe Leela Palace Udaipur banquet hall is an excellent choice for a wedding with up to 250 guests. It is recommended that you contact the hotel management for a larger event or activity. You can send your questions to us via email, and well respond within a day or two working days. Other points of interest include the beautifully lit terraces and outdoor areas. At the Leela Palace Udaipur destination wedding or residential affairs, enjoy a laid-back environment with topnotch facilities and arrangements.\r\n\r\nLeela Palace Udaipur Destination Wedding The Leela Palace Udaipur banquet hall is an excellent choice for a wedding with up to 250 guests. It is recommended that you contact the hotel management for a larger event or activity. You can send your questions to us via email, and well respond within a day or two working days. Other points of interest include the beautifully lit terraces and outdoor areas. At the Leela Palace Udaipur destination wedding or residential affairs, enjoy a laid-back environment with top-notch facilities and arrangements.\r\n\r\n', '../uploads/leela-palace.jpg', 80000),
(4, 'Jagmandir Island Palace', 'The Jagamandir Island Palace is the HRH groups grand heritage palace hotel. It is a historic building that has been transformed into a luxury five-star hotel under the companys management.\r\n\r\n\r\nIt is an ideal venue for a destination wedding and attracts leisure travelers, business giants, and celebrities. A Destination wedding planner in Udaipur recommends this hotel because of its picturesque location and the availability of a ferry service to the hotel. It has the ability to host ceremonial events in a seamless manner.\r\n\r\n\r\nIts Darikhana restaurant is an exclusive place for dining in style, which you can provide for yourself and your guests. The menu includes western and Indian cuisines. The Pichola Bar is one of the oldest settlements on Pichola Lakes bank, and the palace was built with twelve different types of stones.\r\n\r\n\r\nIt was one of Udaipurs most opulent wedding venues. The Jag Mandir was a royal palace that has been converted into a luxurious and luxury hotel. It is part of the hotels HRH group and has three impressive lawn areas to host various wedding functions and ceremonies. Jagmandir is mainly a celebration venue with only a few rooms available for use during events. The central courtyard, kunwarpada lawns, and the main lawns at the back are the three parts.\r\n\r\n\r\nJagmandir Island Palace Udaipur Wedding Package: The Jagmandir Island Palace wedding venue in Udaipur is one of the most common choices for destination and residential weddings. The palatial atmosphere exudes a sense of both the ancient and modern periods. In the 17th century, it was considered to be the residence of royal rulers. Following that, the palace was converted into an opulent hotel that can handle small and large events. The opulent hotel, known as the Garden of Heaven, has hosted a slew of royal weddings.\r\n\r\n\r\nJagmandir Island Palace Udaipur Destination Wedding: Every couples dream is to type knots in a cinematic style. Youll be pleased to learn that Jagmandir Island Palace can transform your wedding dreams into a stunning reality. If you want to experience the atmosphere of a regal wedding, then this is the place to go. It can host up to 1500 people, making it ideal for both small and large weddings.\r\n', '../uploads/jag-mandir.jpg', 120000),
(5, 'Fateh Prakash Palace', 'The Fateh Prakash Palace is a private place where visitors are treated like royalty. The palace has been meticulously preserved for discerning visitors and couples like you who want a majestic wedding ceremony in every way.\r\n\r\n\r\nThis hotel on the eastern shore of Lake Pichola, which looks like a castle from a fairytale, has collaborated with an Indian wedding planner. Authentic historical paintings from the Maharana era adorn the walls of every suite and bed. The furniture is also from history books, and it envelops you in velvet comfort.\r\n\r\n\r\nThe hotel provides a wide range of facilities, which is why the best royal wedding planners in India recommend it to you. Fitness centers, tennis courts, steam rooms, and a band will keep you and your guests entertained. The Panghat Spa & Beauty Salon, which provides ayurvedic treatments to improve beauty, is another hotel specialty. If you and your partner are interested in history, you can request a MaharanaMewar Special Library visit.\r\n\r\n\r\nServices and facilities\r\n\r\nThis magnificent palace greets its visitors with a warm welcome that lifts their spirits in preparation for the upcoming wedding festivities. In addition to the luxuries offered by this hotel, guests will enjoy outstanding amenities such as -\r\n\r\n\r\nServices for specially-abled\r\n\r\nSuryadarshan, a stylish bar\r\n\r\n\r\nFateh Prakash Palace also offers luxury accommodations to its tourists in addition to the amenities. The well-appointed, spacious, and sophisticated rooms and suites can make you feel like royalty\r\n\r\n\r\nThe Rajputana lifestyle is visible in the hotels rooms and suites. The palaces rooms and suites are divided into five categories Palace Rooms, Deluxe Suites, Luxury Suites, Luxury Suites with Sit Out, Grand Luxury Suites, and Royal Suites. The butler service at the palace is the icing on the cake for this fairytale home.\r\n\r\n', '../uploads/fateh-prakash-palace.jpg', 80000),
(6, 'Shiv Niwas Plaace', 'On the banks of Lake Pichola in Udaipur  Shiv Niwas Palace is a magnificent crescentshaped building from the early twentieth century that is meticulously maintained. Maharana Fateh Singhjis residence was the Shiv Niwas Palace in Udaipur. His palace which has been converted into a heritage hotel, is a lovely venue for weddings and activities. It has been restored to its original pristine glory and is now listed as a Grand Heritage Palace. It effectively combines Rajasthans rich cultural heritage with modern conveniences and amenities. Because of these characteristics, it has become a familiar wedding spot.\r\n\r\n\r\nAccording to a top wedding planner in Udaipur  it is the ideal location for a Royal Wedding. This palace turned hotel has enough room for various wedding functions such as Mehendi ceremonies Sangeet ceremonies, and other entertainment events. As a result, there will be no difficulties or hassles when it comes to celebrations.\r\n\r\n\r\nThere are 19 Palace Rooms, 8 Terrace Suites, 6 Royal Suites, and 3 Imperial Suites with private terraces at Shiv Niwas Palace. The lawn and poolside section of the hotel are the most suitable places for wedding receptions. It has the last remaining room for visitors and invitees. The hotel  terrace is also a beautiful and perfect place for your wedding.\r\n\r\n\r\nShiv Niwas Palace has nineteen rooms, each with original furniture and paintings from the royal familys collection. The royal and imperial suites are suitable for a couple in love planning a lavish wedding. The building was once reserved for Mewars dignitaries and guests royal family, but now you can book it for your destination Wedding in Udaipur.\r\n\r\n\r\nWeddings at Shiv Niwas Palace are a sight to behold. Shiv Niwas Palaces distinct personality contributes significantly to the success of activities of all kinds. Culture, luxury, stunning architecture, personalized service, and the finest cuisine combine to create a oneofakind experience.\r\n\r\n', '../uploads/shiv-niwas-palace.jpg', 85000),
(7, 'The Zenana Mahal', 'Formerly a palace for ladies of the royal families, The Zenana Mahal is now a transformed palace. It hosts events, musical soirees, and royal weddings, so you must take a look at this place. The Zenana Mahal has been the witness of numerous regal weddings and will witness yours too.\r\n\r\nUdaipur offers the best destination wedding venue in the form of the Zenan Mahal because you start with receiving a royal welcome where four men on horses holding lances greet you. The palace band plays music while the palace guards stand in ceremonial getup as nagada and shehnai play in the background. You also receive a shower of rose petals, rose buds and gajras.\r\n\r\nWhile being at the prime of every attention, you and your would-be partner walk down a red carpet when you enter through a florally decorated entrance. The best wedding planner in Udaipur refer you this location because it makes your special day a royal one in every aspect. Move along a pathway lit by Mashaal and candles to the venue and treat your family and friends with a majestic evening full of tasty dishes on flower-decked tables.', '../uploads/zenana-mahal.jpg', 130000),
(8, 'Manek Chowk', 'Manek Chowk is the palace ground of the City Palace of Udaipur which exudes memories of an era long gone. There was a time when the Maharanas of Mewar held courts or arranged for festivities at this place. Now it is a host for cultural performances, corporate events, fashion events, gala evenings and wedding ceremonies.\r\n\r\nDestination Wedding Planner in Udaipur recommends this place because of its capacity to host over a thousand guests. So, you don’t have to hold back if the accommodation facilities worry you. You have to pay the expenses of hiring the spot; the executives of the venue will arrange everything else,\r\n\r\nThe Event Management Company in Udaipur, Dream Makers Event suggests utilizing the Mardana Mahal which is a section of the Manek Chowk providing an exclusive backdrop of regal experiences. You can choose to organize a sit-down or buffet dinner for your near and dear ones in a landscaped garden. Besides, as the jewel of the evening, you two will receive a warm and traditional welcome with shehnais and nagadas playing in the background and flower petals and gajras raining down on you.\r\n\r\n', '../uploads/manak-chowk.jpg', 80000),
(9, 'Trident', 'TRIDENT HILTON, Udaipur is located on the banks of the picturesque Pichola Lake. Its Sprawled over an area of three acres that qualifies it as an amazing wedding venue in Udaipur. The Trident chain of hotels is already famous for any wedding function. The Trident at Udaipur is an awarded accommodation facility while the location itself is in the third position of the worlds top fifteen cities. The Trident is a five-star hotel and offers five-star facilities for a wedding ceremony.\r\n\r\nThe hotel offers easy access to the city center. The hotel provides a perfect base to explore the fabled city of Udaipur, acclaimed worldwide for its beautiful lakes, medieval palaces, and colorful bazaars. It has 143 rooms furnished in shades of beige and light cream. Beautifully watermarked by shimmering lakes, the city of Udaipur has a romantic appeal for couples. The city is replete with a number of forts, palaces, and hotels that offer amazing locales to get hitched. A majority of couples prefer a wedding at hotel Trident Hilton Udaipur.\r\n\r\nIf anybody going to visit The Trident Hilton the first time, views of them like wow, a wonderful, amazing place for an Events. The great heritage of Udaipur is reflected in every nook and corner of the hotel. Its architecture sweeps you off your feet at first sight.\r\n\r\nA perfect venue for weddings each and every function like Mehendi ceremony, Sangeet ceremony, procession, reception, etc… It is having large spaces for wedding arrangements without hassle. Also, the view of the poolside area, Main entrance, Lawn, suits, lobby, and front view of the hotel everything seems too wonderful and perfect.\r\n\r\nIn Udaipur, having so many best wedding planners for your destination wedding event, if you wish to do a wedding event in Udaipur at exotics places, the renowned wedding planner in Udaipur, Dream Makers Event is here to make your wedding a memorable at a world-class banquet hall. Let Us Know. We will provide the best options, services, and knowledge for a wedding event. We will assist you from beginning to ending of your Wedding Event.\r\n\r\n', '../uploads/trident (1).jpg', 100000),
(10, 'The Lalit Laxmi Vilas', 'The Lalit Laxmi Vilas is an ideal place to stay in the Aravalli Hills, with a breathtaking view of Fateh Sagar Lake. The hotel perfectly exemplifies the princely state of Rajasthans rich history and culture. Maharana Fateh Singh designed the hotel, which sits atop a hilltop and reflects the elegance, grandeur, and culture of a bygone age.\r\n\r\n\r\nThe buildings décor and design provide the beautiful atmosphere that you expect from your Indian wedding planner. At the Lalit Laxmi Vilas, there are three locations to choose from: the Aangan, the Aamrapali lawn, and the Lower Lawn. A dedicated catering team serves personalized menus at the hotel.\r\n\r\n\r\nBecause of its ethnic wedding locations, the Best Wedding Planner in Udaipur recommends this venue for a destination wedding in Udaipur. The Aangan is a large restaurant with an open kitchen where visitors can watch the chefs at work. Cocktail receptions are held on the Amrapali lawn, which is shaded by a mango orchard. It also makes it easier to mingle with guests at a formal banquet. Another lovely location is the Lower Lawn, which features traditional dance performances, a royal bagpiper, and a dancing horse.\r\n\r\n\r\nLalit Laxmi Vilas Wedding Package\r\n\r\nThe wedding venue Lalit Laxmi Vilas is well-known in the hospitality industry. Its the ideal combination of old-world elegance and modern luxuries. This 1911 heritage property exudes the regal vibes of the city of palaces. The hotel offers the perfect ambiance and environment for weddings and related activities, perched amidst the fabled Aravalis with a spectacular view of Fateh Sagar Lake. Guests can choose from a variety of locations and personalize the decor and set-up to suit their needs.\r\n\r\n\r\nLalit Laxmi Vilas Destination wedding\r\n\r\nThe hotel offers a variety of banqueting options as well as lawns for various events. It has 23000 square feet of event space, including the Aamrapali lawn, which is ideal for hosting casual affairs and cocktails. Angan, a 3000 square foot outside set-up with outdoor space, overlooks the serene Fateh Sagar Lake. With Sajjangarh fort and Fateh Sagar Lakes views, guests can enjoy a gastronomical experience like no other at the hotels Indian restaurant, Aangan. You will enjoy global delicacies at Padmini, the in-house multi-cuisine restaurant, while socializing with friends and relatives. After a long day of adventure, unwind at the on-site spa center. Stop by the Aum Shop to pick up a few souvenirs from this enchanted place. This opulent hotel is magical and unrivaled in every way.\r\n', '../uploads/the-lalit-laxmi-vilas.jpg', 95000),
(11, 'The Taj Aravali Resort & Spa', 'There is no need for an introduction to The Taj Hotel chain. The Taj Aravali Resort & Spa is at Udaipur, where it stands on twentyseven acres of land at the base of the breathtaking Aravali mountain range. The hotel receives inspiration from the nomadic tents of Rajasthan which exudes a genuine culture of the area.\r\n\r\n\r\nThe resort is spread over 27 acres, creating an expansive oasis surrounded by the rugged Aravali Ranges while remaining close to the city center and the sublime Fateh Sagar, one of the citys sophisticated lake systems five big names. Rajasthani architecture and its renowned nomadic culture have influenced our modern, ergonomic design philosophy. Decor elements like the gokhra  a low seating area by the window  and furnishings influenced by Mewars world-class equestrian heritage add local flair to a minimalist luxury ethos, with the singlepole desert tent as the leitmotif. As gritty as it is romantic, the resort organically combines opposites in both amenities and excellent services.\r\n\r\n\r\nThe resort has 176 well-appointed rooms, suites, and luxury tents staggered across various levels around an undulating landscape, making it a destination unto itself. We also have Tiri, an all-day diner, Javitri, a pure vegetarian specialty restaurant, Ridgeview, an outside grill, and Oodeypore Lounge, overlooking the swimming pool manicured gardens. Our unrivaled sports and fitness facilities, including modern squash, badminton, a gymnasium, and a state-of-the-art indoor golf simulator, represent the mountains adventurous spirit. The resort is ideally positioned to delight families, adventurous travelers, and jet-setting professionals looking to refresh and rejuvenate themselves, with a 34-seater movie theatre, a JIVA Spa housed in its block, and resplendent banquet venues.\r\n\r\n\r\nWhen it comes to weddings, one of Indias best wedding designers and planners recommends Taj Aravali Resort & Spa as one of Udaipurs best wedding venues. This is also one of the most luxurious and premium venues for all of your grand occasions, such as Sangeet, Cocktail, Godh Tikka, Wedding, and Reception.\r\n\r\n\r\nThe hotel features ninety-two rooms that fall under five different categories. The Best Wedding Planner in Udaipur endorses this hotel for several facilities like outdoor grilling. It is always of sheer joy to grill tasty meat or vegan dishes out under the open sky with family members and friends. Besides, a couple can engage in physical activities which you find at this hotel like tennis, golf, rock climbing, and rope activities.\r\n\r\nTaj contributes in making Udaipur provide the best wedding venue in Udaipur with several Jiva spa treatment rooms, a health club with sauna and steam bath and a swimming pool for adults and a different pool for kids.\r\n\r\n\r\n\r\n\r\n', '../uploads/taj-aravalli.jpg', 75000),
(12, 'The Raas Devigarh', 'The Raas Devigarh comfortably holds a position in the foothills of the Aravalli range. In reality, it is an eighteenth-century palace which is now a premier five-star hotel in Udaipur. Raas Devigarh is an embodiment of beauty and charm of the old kingdom of the Rajputs, and its array of landscaped gardens and decorative styles make it a perfect spot for a wedding.\r\n\r\nIt is a heritage hotel and resort, housed in the 18th-century Devi Garh palace in the village of Delwara. It was the royal residence of the rulers of Delwara principality, from the mid-18th century till the mid-20th century. Situated amidst in the Aravalli hills, 28 km northeast of Udaipur, Rajasthan, Devigarh forms one of the three main passes into the valley of Udaipur.\r\n\r\nDevi Garh is more than beautiful, it is inspiring.\r\n\r\nDevigarh stands, quite literally, in two worlds: the traditional and the modern. Devi Garh, the Fort Palace is a peaceful, tranquil, luxurious, and majestic with contemporary interiors. It has 39 well-furnished suites, equipped with every finer detail; this palace vividly depicts local craftsmanship. Flashes of color – the walls are hung with dramatic art or sparkle with semi-precious inlaid stones – highlight the elegant suites spread over the 14 floors of Devi Garh.\r\n\r\nWeddings at Devigarh Palace create an unforgettable memory of couples. The weddings at Devigarh palace are highly admired as it has complete infrastructure for the grand weddings. It is the perfect romantic getaway in the desert land of Rajasthan surrounded by lush green fields and mountains on three sides.\r\n\r\nWhen you will visit Devi Garh, you will feel like Wow!!! Amazing!!! Its such a fabulous place for weddings. Mostly couples came here out of the countries only and only for their wedding events. Its such a fantastic and magical palace. Every ceremony thats come in too few days wedding celebrations, all are going to organize at a beautiful palace Devi Garh. We can hold here all functions without hassle.\r\n\r\n\r\n\r\n', '1677665004.jpg', 80000),
(13, 'Fatehgarh Palace', 'Udaipurs Fateh Garh Palace is part of the Renaissance School of architecture. The term Heritage Renaissance refers to the difficult construction process of laying the foundation pillar by pillar and stone by stone. In the fast-paced world of tourism and destination weddings, this innovative concept is new and exciting.\r\n\r\n\r\nWedding planners recommend that you consider this heritage hotel in Udaipur for your best ceremony. Fateh Garh is a lovely venue for a destination wedding, with a professional and knowledgeable team to assist you. The service will ensure that you and your partner have a magical wedding ceremony.\r\n\r\n\r\nThe banquet hall is the main feature that distinguishes it as the best Royal Wedding Venue in Udaipur. The hotel is known for its Sansha spa, spread out over a large area with a view of the capital. You and your companion will also spend some quality time with the hotels set of dogs. Not to mention the exclusive dishes that this hotel is known for, which you will serve to your guests. The sunset terrace is another famous spot for couples who want to watch the sunset together.\r\n\r\n\r\nServices and facilities\r\n\r\nHotel Fateh Garh is a trailblazer in sustainable, ethical, and efficient tourism, located in Udaipurs City of Lakes heart. The hotel is well-equipped with all of the required facilities and comforts to ensure a grand celebration for your wedding. Its an incredible retreat that pampers its visitors with modern luxury and relaxation, enhancing the grandeur of the occasion. Guests are treated to a friendly ambiance and exceptional service. The hotel offers a variety of luxurious amenities, including\r\n\r\n\r\nWellness and Spa Center\r\n\r\nSwimming Pools in the Open Air\r\n\r\nSpacious Weddings Venues\r\n\r\n\r\nThis opulent resort has 48 luxury rooms and suites. In these well-furnished spacious quarters, unwind while soaking in supreme comfort. Wide windows provide scenic views and plenty of natural light in the tastefully decorated halls. The hotels modern amenities and high-end furnishings ensure that its guests are as comfortable as possible.\r\n\r\n', '../uploads/fatehgarh.jpg', 110000),
(14, 'Lemon tree', 'The Majestic Aurika by Lemon Tree is situated in the heart of the city of lakes at atop of its own hill. It spread across a large area of 5 acres of the undulating hilltop. Due to its vivid destination, it offers unique recreational experiences to guests looking to rejuvenate and explore.\r\n\r\nThe hotel welcomes you with the bastion gate, called Antara(means to pause) where guests can stop and breathe the enchanting air surrounding the resort. While taking a walk through the resort you will feel like you are in the royal era due to the huge courtyards and richly gilded interiors.\r\n\r\nAurika is one of the best venues for your destination wedding in Udaipur. The resort has a banquet area of approximately 22000 sq ft including 5500 sq ft pillarless ballroom, Ekaara, the 5000 sq ft courtyard and Aurum-3000 sq ft boardroom with terrace, which is ideal for hosting any kind of events. The 139 aesthetically designed rooms and suites provide all modern amenities and facilities with picturesque views of the city.\r\n\r\nDream Makers as the best wedding planner in Udaipur guarantees you that you and your guests will definitely have a memorable experience here.\r\n\r\nWe also recommend this place for its sustainability initiatives. The world is losing its atmospheric livability at an alarming rate. By choosing to stay and have a wedding ceremony at this hotel, you are helping the world become a greener place. The hotel continually tries to use energy efficiently and conserves water.\r\n\r\n', '../uploads/lemon-tree.jpg', 90000),
(15, 'Radisson Blu Resort & Spa', 'The Sheraton Udaipur known as Radisson Blu Resort has located 3 km from City Palace Market, Shilpgram Craft Village, and Jagdish Temple. Hotel Radisson Blu is stylish, iconic and sophisticated luxury hotel in Udaipur. It is everything that you wish your destination wedding hotel to be. The hotel creates excitement with a stunning and leading-edge design. You also get free internet usage every day during your stay along with innovative and relatively holistic services and facilities.\r\n\r\nIt has 240 rooms and the biggest banqueting space in Udaipur offers a lovely wedding destination on its own. The hotel will also include three lush gardens and 600 square meters of meeting space, a luxury spa and four high-quality restaurants and bars. Fateh Sagar Ballroom is a preferred indoor venue in Udaipur, while the outdoor gardens facing the lake offer an intimate and romantic setting for a ceremony or reception. The poolside venue can host a dinner or lunch for over 300 people.\r\n\r\nThe best Wedding Planner in Udaipur wants to intensify the experience of luxury wedding and also provide fullest facility for your stay at the hotel. The hotel features a double tier cascading pool where you and your would-be partner can relax and refresh. Like every other classy hotel, the Radisson also has a spa which provides beauty treatment while rejuvenating and enlivening your senses.\r\n\r\nIt is a proud host of various glittering wedding ceremonies facilitating couples married journey for life. Any couples want to celebrate their wedding in Sheraton, they can hire Dream Makers Event & Entertainment services.\r\n\r\n', '../uploads/radisson-blu (1).jpg', 120000),
(16, 'Chunda Palace', 'Chunda Palace offers breathtaking views of the City Palace and the beautiful Lake Pichola, Udaipur, Rajasthan. It belongs to one of the noble houses from the Mewar kingdom, conceived as a traditional Rajasthani palace, Chunda Palace showcases the rich heritage of the Mewar region. The mission of the hoteliers is to provide authentic levels of hospitality to the guests with embroidered interiors, hand-painted walls with artwork depicting the culture of the region.\r\n\r\nGlance to the accommodation of Chunda Palace – having 46 rooms including 16 suites (30 Palace Rooms, 3 Royal Imperial Suites, 8 Historic Suites, and 5 Grand Historic Suites) & 4 floors. Most of the rooms offer a view of the City Palace, Aravali mountain ranges, PicholaLakee, and Jag Mandir Island Palace. All the rooms are well equipped with modern amenities like international direct dial facility, private bars, LCD television with satellite programs, Wi-Fi – wireless internet access, etc.\r\n\r\nLooking forward to a Destination wedding in Udaipur! Chunda Palace is a Fabulous & Amazing Palace of the Udaipur for Wedding Events. A large number of couples all over the world prefer to have their weddings at Chunda Palace Udaipur. The gracious paintings and artwork of this region impart it a great look that adds to the celebration of the weddings.\r\n\r\nOnce you went to check out the venue for the wedding, you will found that Terrace to be simply amazing! It has a capacity of 200-250 guests seated. An air coned indoor hall combined with Terrace makes a logical combination to have early evening functions inside and then rest of the event at Terrace outdoor. It has the largest rooftop Swimming Pool in Udaipur. The traditional Gazebos add up to the charm of the terrace. There is a separate Bar on the terrace which can hold 80-90 guests conveniently.\r\n\r\nThe wedding planners cant conjure a better place than this to arrange your ceremonies. It is a royal wedding paradise where you feel no less than royalty on your special day. It is regal in every aspect to be a wedding venue, and the majestic romance and royal grandeur give the finishing touches.\r\n\r\nThere are several open spaces to have pre-wedding functions, Mehendi ceremony, Sangeet ceremony, night parties, etc… It looks like a very promising spot for a destination wedding celebration. We as the best Wedding Planner in Udaipur can organize a royal wedding while taking care of every last detail, including theme, venue, food enhancements, beverages, wedding planning, ambiance and décor, and recreational music. If any couples wish to go through their royal palace wedding in Chunda Palace, they can hire Dream Makers Event Services – We build Dream around you.\r\n', '../uploads/chunda-palace.jpg', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `id` int(5) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`id`, `event_name`, `image`) VALUES
(1, 'Spa & Resortd', '10.jpg'),
(2, 'Dance Floor Event', '11.jpg'),
(3, 'Banquet Hall', '12.jpg'),
(4, 'Ganesh Vandana', '02 (19).jpg'),
(5, 'Dj Setup', '03 (19).jpg'),
(6, 'Entertainment Stage', '04 (18).jpg'),
(7, 'Chairpersons For Events', '05 (17).jpg'),
(8, 'Conference Hall', '06 (18).jpg'),
(9, 'Leela Palace Music', '01 (19).jpg'),
(10, 'Reception Hall', '09 (2).jpg'),
(11, 'Meeting Room', 'event8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `id` int(5) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`id`, `image`) VALUES
(1, '001  gallery.jpg'),
(2, '002  gallery.jpg'),
(3, '003  gallery.jpg'),
(4, '004 gallery.jpg'),
(5, '005 gallery.jpg'),
(6, '006 gallery.jpg'),
(7, '007 gallery.jpg'),
(8, '008  gallery.jpg'),
(9, '009  gallery.jpg'),
(10, '010  gallery.jpg'),
(11, '011  gallery.jpg'),
(12, '012 gallery.jpg'),
(13, '013 gallery.jpg'),
(14, '014 gallery.jpg'),
(15, '015 gallery.jpg'),
(16, '016 gallery.jpg'),
(17, '18 gallery.jpg'),
(18, '19 gallery.jpg'),
(19, '20 gallery.jpg'),
(20, '21 gallery.jpg'),
(21, '22 gallery.jpg'),
(22, '23 gallery.jpg'),
(23, '24 gallery.jpg'),
(24, '25 gallery.jpg'),
(25, '26 gallery.jpg'),
(26, '27 gallery.jpg'),
(27, '28 gallery.jpg'),
(28, '29 gallery.jpg'),
(29, '30 gallery.jpg'),
(30, '31gallery.jpg'),
(31, '32 gallery.jpg'),
(32, '33 gallery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tbl`
--

CREATE TABLE `hotel_tbl` (
  `hotel_id` int(5) NOT NULL,
  `dest_id` int(5) NOT NULL,
  `hotel_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_tbl`
--

INSERT INTO `hotel_tbl` (`hotel_id`, `dest_id`, `hotel_img`) VALUES
(1, 1, '../uploads/01 (1).jpg'),
(2, 1, '../uploads/02 (1).jpg'),
(3, 1, '../uploads/03 (1).jpg'),
(4, 1, '../uploads/04 (1).jpg'),
(5, 1, '../uploads/05 (1).jpg'),
(6, 1, '../uploads/06 (1).jpg'),
(7, 2, '../uploads/01 (2).jpg'),
(8, 2, '../uploads/02 (2).jpg'),
(9, 2, '../uploads/03 (2).jpg'),
(10, 2, '../uploads/04 (2).jpg'),
(11, 2, '../uploads/05 (2).jpg'),
(12, 2, '../uploads/06 (2).jpg'),
(14, 2, '../uploads/07.jpg'),
(15, 2, '../uploads/08.jpg'),
(16, 2, '../uploads/09.jpg'),
(17, 3, '../uploads/01 (3).jpg'),
(18, 3, '../uploads/02 (3).jpg'),
(19, 3, '../uploads/03 (3).jpg'),
(20, 3, '../uploads/04 (3).jpg'),
(21, 3, '../uploads/05 (3).jpg'),
(22, 3, '../uploads/06 (3).jpg'),
(23, 3, '../uploads/07 (1).jpg'),
(24, 3, '../uploads/08 (1).jpg'),
(25, 3, '../uploads/09 (1).jpg'),
(26, 4, '../uploads/01 (4).jpg'),
(27, 4, '../uploads/02 (4).jpg'),
(28, 4, '../uploads/03 (4).jpg'),
(29, 4, '../uploads/04 (4).jpg'),
(30, 4, '../uploads/05 (4).jpg'),
(31, 4, '../uploads/06 (4).jpg'),
(32, 5, '../uploads/01 (5).jpg'),
(33, 5, '../uploads/02 (5).jpg'),
(34, 5, '../uploads/03 (5).jpg'),
(35, 5, '../uploads/04 (5).jpg'),
(36, 5, '../uploads/05 (5).jpg'),
(37, 5, '../uploads/06 (5).jpg'),
(38, 6, '../uploads/01 (6).jpg'),
(39, 6, '../uploads/02 (6).jpg'),
(40, 6, '../uploads/03 (6).jpg'),
(41, 6, '../uploads/04 (6).jpg'),
(42, 6, '../uploads/04 (4).jpg'),
(43, 6, '../uploads/04 (5).jpg'),
(44, 6, '../uploads/04 (6).jpg'),
(45, 7, '../uploads/01 (7).jpg'),
(46, 7, '../uploads/02 (7).jpg'),
(47, 7, '../uploads/03 (7).jpg'),
(48, 7, '../uploads/04 (7).jpg'),
(49, 7, '../uploads/05 (7).jpg'),
(50, 7, '../uploads/06 (7).jpg'),
(51, 8, '../uploads/01 (8).jpg'),
(52, 8, '../uploads/02 (8).jpg'),
(53, 8, '../uploads/03 (8).jpg'),
(54, 9, '../uploads/01 (9).jpg'),
(55, 9, '../uploads/02 (9).jpg'),
(56, 9, '../uploads/03 (9).jpg'),
(58, 9, '../uploads/04 (9).jpg'),
(59, 9, '../uploads/05 (9).jpg'),
(60, 9, '../uploads/06 (9).jpg'),
(61, 10, '../uploads/01 (10).jpg'),
(62, 10, '../uploads/02 (10).jpg'),
(63, 10, '../uploads/03 (10).jpg'),
(64, 10, '../uploads/04 (10).jpg'),
(65, 10, '../uploads/05 (10).jpg'),
(66, 10, '../uploads/06 (10).jpg'),
(67, 11, '../uploads/01 (11).jpg'),
(68, 11, '../uploads/02 (11).jpg'),
(69, 11, '../uploads/03 (11).jpg'),
(70, 11, '../uploads/04 (11).jpg'),
(71, 11, '../uploads/05 (11).jpg'),
(72, 11, '../uploads/06 (11).jpg'),
(73, 12, '../uploads/01 (12).jpg'),
(74, 12, '../uploads/02 (12).jpg'),
(75, 12, '../uploads/03 (12).jpg'),
(76, 12, '../uploads/04 (12).jpg'),
(77, 12, '../uploads/06 (12).jpg'),
(78, 13, '../uploads/01 (13).jpg'),
(79, 13, '../uploads/02 (13).jpg'),
(80, 13, '../uploads/03 (13).jpg'),
(81, 13, '1677671714.jpg'),
(82, 13, '../uploads/05 (12).jpg'),
(83, 13, '../uploads/06 (13).jpg'),
(84, 14, '../uploads/01 (14).jpg'),
(85, 14, '../uploads/02 (14).jpg'),
(86, 14, '../uploads/03 (14).jpg'),
(87, 15, '../uploads/01 (15).jpg'),
(88, 15, '../uploads/02 (15).jpg'),
(89, 15, '../uploads/03 (15).jpg'),
(90, 15, '../uploads/04 (14).jpg'),
(91, 15, '../uploads/05 (13).jpg'),
(92, 15, '../uploads/06 (14).jpg'),
(93, 16, '../uploads/01 (16).jpg'),
(94, 16, '../uploads/02 (16).jpg'),
(95, 16, '../uploads/03 (16).jpg'),
(96, 16, '../uploads/04 (15).jpg'),
(97, 16, '../uploads/05 (14).jpg'),
(98, 16, '../uploads/06 (15).jpg'),
(99, 17, '../uploads/01 (17).jpg'),
(100, 17, '../uploads/02 (17).jpg'),
(101, 17, '../uploads/03 (17).jpg'),
(102, 17, '../uploads/04 (16).jpg'),
(103, 17, '../uploads/05 (15).jpg'),
(104, 17, '../uploads/06 (16).jpg'),
(105, 18, '../uploads/01 (18).jpg'),
(106, 0, '../uploads/02 (18).jpg'),
(107, 18, '../uploads/03 (18).jpg'),
(108, 18, '../uploads/04 (17).jpg'),
(109, 18, '../uploads/05 (16).jpg'),
(110, 18, '../uploads/06 (17).jpg'),
(111, 18, '../uploads/03 (18).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services_tbl`
--

CREATE TABLE `services_tbl` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_detail` text NOT NULL,
  `service_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_tbl`
--

INSERT INTO `services_tbl` (`service_id`, `service_name`, `service_detail`, `service_img`) VALUES
(1, 'Food&Beverage', 'Food is the most important factor in any event success. Quality of food served during your wedding reception is one of the most important criteria that your guest remember the delicious taste of the food served at your wedding. And to make your event highly successful, you need to ensure that your catering service is the best in the taste.\r\n\r\nWe, at Dream Makers Event, help you in providing Best Catering Services with a wide variety of menu and dishes by our expert chefs from different zones of India. And we handle all the function from the time the date is fixed till the event gets over.\r\n\r\nAs a Wedding Event planner, we serve the delicious taste for your guests and assure your guests happiness with our Food services. So, let your guest remember the taste of culture blended with quality and love, with pride.', '../uploads/food-beverage.jpg'),
(2, 'Wedding Decor', 'Dream Makers Event:- Best wedding decorators in Udaipur. We as the best decor production company in Udaipur, tend to understand every requirement of the client and can provide plenty of options for wedding decoration in Udaipur, Jaipur, Rajasthan, Goa, Kerala and other states of India. We are known for creativity, integration, and exceptional detailing. We not only just plan but decor the weddings according to the theme that turns out to be a long-lasting memory. We provide best all of these along with many other event management services for theme wedding decor in Udaipur, Jaipur, Rajasthan, Goa, Kerala.\r\n\r\nResult - happy guests and satisfied customers.', '../uploads/wedding-decor.jpg'),
(3, 'Hospitality', 'Live In The Lap Of Lavish Hospitality With Dream Makers Event\r\n\r\nA wedding is a grand occasion where two souls get united in presence of their families and guests. It is the guests who turn your wedding into a special event and hospitality plays an important part in any wedding.\r\n\r\nWe at Dream Makers Event make everyone feel special with our specialized hospitality services, as if without their presence this event would not be complete. Our team members welcome your guests and take their entire responsibility once they arrive for a destination wedding. A wedding is an elaborate affair which continues for a few days.\r\n\r\nOur professional hosts and hostesses take care of your guests on your behalf when you remain busy with the various rituals. So, Destination Wedding Planners in India ensures that they have a comfortable stay just like a home and have a great time as well. Our personalized attention towards everyone will make your wedding a memorable event for your guests. We offer a wide range of hospitality and guest management services for our clients which are mentioned below.\r\n\r\nBooking accommodation: We arrange accommodations for guests from a different location according to the client’s budget and specifications. As the top Royal Wedding Planner in India, we make it a point that the accommodation is near to the wedding venue, so that it is convenient for the guest to attend both pre and post wedding functions.\r\nHospitability desk at hotels: The Professional wedding planning services in India always have hosts and hostesses at the hotel lobbies to attend to any queries. Your guests will feel welcomed and comfortable because of the service at their disposal.\r\nAirport and Railway station help desk: We set up a separate help desk at the airport or railway station to answer any queries and help them to reach the wedding venue without any hassle.\r\nTransport facilities: We make arrangements to pick up guests from airport, railway stations or bus stops and drop them at the hotel. We also manage their departure and cater to any logistic needs.\r\nFood: We make arrangements for refreshments like special meals and snacks.\r\nWelcome activities\r\n\r\nOur unique ideas may help you to meet and greet guests in a different way. This will make your guests happy and delighted making this event unforgettable.\r\n\r\n\r\n', '../uploads/hospitality.jpg'),
(4, 'Logistics', 'Convenient and Comfortable Transportation Arrangements by Dream Makers Event\r\n\r\nMaking arrangements for transportation to pick up guests from the airport, railway station or bus stop and dropping them at the hotel or wedding venue is an important part of planning a wedding. This process is time consuming, stressful and can be worrisome at times on your big day. However, you can leave behind your worries as we at Dream Makers Event provide comprehensive logistic management services.\r\n\r\nAs the leading Destination Wedding Planners in India, we provide transport services not only to the guests but also to the bride and groom and their families. We also arrange for exclusively designed and decorated premium car for you on your wedding day.\r\n\r\nWe have customized transport solution to suit your budget and preferences. Our fleet consists of cars, buses, semi luxury and luxury cars. If you want your wedding to be more special and make it a memorable experience for your guests, Royal Wedding Planner in India also offers premium luxury cars. With our logistics support, you and your guests can travel in comfort and style. You will be touched by the behavior of our staff and the hospitable drivers. All these are extra efforts that we make on our part only to make you feel special.\r\n\r\nWe always pay attention to the fact that the guests do not miss any function or get late. We make sure that they witness and enjoy each and every moment of your dream wedding. Being one of the best professional wedding planning services in India, you can rely on us about your guests reaching their destination on time. We provide logistic service for all pre and post wedding functions. Our team members go a step forward to coordinate the event smoothly and be with them whenever they need any assistance. With our trusted logistic services, we make transportation of guests hassle free, so that the client can have peace of mind and enjoy their dream day.', '../uploads/logistic.jpg'),
(5, 'Entertainment', 'Relive Every Moment of the Wedding with Professional Entertainment Services from Dream Makers Event\r\n\r\nWhat a wedding without some music and dance? Live performance enhances the entertainment quotient of a wedding ceremony. These performances add color and glitz and take this grand occasionto a separate level. So, we at Dream Makers Event make all sorts of arrangements to entertain your guests with live performances. Your guests get a glimpse of renowned celebrities performing because Destination Wedding Planners in India has strong connections with the entertainment world.\r\n\r\nMusic is the soul of every occasion. We hire some of the best artists and live bands who can set the tone for the wedding. Your guests can be a part of celebrity performances by leading singers, dancers and actors. With these star attractions guest get an experience of a lifetime which they remember for a long time. The Royal Wedding Planner in India brings some of the best DJswho can play some great music and make the guests dance. They also performon special requests from the guests and involve them in special activities. The anchors and emcees host the wedding function and perform the task of introducing the bride and the groom to the guests and communicate with the celebrities. Without some live music your special day may seem somewhat dull and boring. It is a great way to celebrate the most important day of your life.\r\n\r\nThe professional wedding planning services in India not only arrange for live performances but also take care of the celebritys requirements like lodging, fooding, travel, makeup etc. Our clients need not worry about anything and can completely trust us regarding management of these issues. Wedding also means celebration of love with friends and family and all celebrations remain incomplete without live entertainment. It makes this grand occasion lively. We are here to turn this auspicious occasion into a dreamy affair from which you and your guests would never like to come out.', '../uploads/entertainment.jpg'),
(6, 'Photography & Video', 'Preserve those Special Moments with Photography Services from Dream Makers Event\r\n\r\nA wedding is the most memorable occasion in an individuals life. It is the most important day for the bride and groom and they would like to cherish those unique moments throughout their lives. Photographs are the only way to capture those special moments. So, we at Dream Makers provide wedding photography and videography services along with other wedding related services. As the leading Destination Wedding Planners in India, weare qualified and experienced to capture each and every moment of this grand occasion. Our specialization lies in both video and still photography.\r\n\r\nIn a wedding ceremony, the bride and the groom are the center of attraction and the professional photographers for budget wedding have the required expertise to depict the same. We make this ceremony vivid in your mind forever with their photographs. We at Dream Makers offer photography services that cover all aspects of the event including pre and post wedding functions, wedding photo shoots, family photographs and photographs of guests as well. These images are so beautiful that whenever you see them, it brings a smile on your face and fills your heart with joy. The images clicked by our expert photographers remindyou of your fairytale wedding when you see them after a long time.\r\n\r\nOur photographers use the latest technology to deliver sharp images. This makes the characters in the photographs appear life like. We use the best quality digital cameras which makes excellent videos. The exclusive wedding photos and videos by Professional Wedding Photography Services In India tells a beautiful story of the grand wedding ceremony which you can share with your family, friends, children and grandchildren. When the wedding ceremony is over, it is only the photographs which can bring back those sweet memories. Therefore, we help you to preserve those special moments through our photographs.', '../uploads/photography.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stories_tbl`
--

CREATE TABLE `stories_tbl` (
  `stories_id` int(5) NOT NULL,
  `stories_name` varchar(30) NOT NULL,
  `stories_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stories_tbl`
--

INSERT INTO `stories_tbl` (`stories_id`, `stories_name`, `stories_img`) VALUES
(1, 'Aesha & Alon Wedding', '1677585858.jpg'),
(2, 'Ambika & Mittal Wedding', '../uploads/02.jpg'),
(3, 'Anuraag & Devanshi Wedding', '../uploads/03.jpg'),
(4, 'Brijesh & Yachana Wedding', '../uploads/04.jpg'),
(5, 'Arpana & Ayush Wedding', '../uploads/05.jpg'),
(6, 'Punit & Nitya Wedding', '../uploads/06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subservices_tbl`
--

CREATE TABLE `subservices_tbl` (
  `subser_id` int(5) NOT NULL,
  `service_id` int(5) NOT NULL,
  `subser_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subservices_tbl`
--

INSERT INTO `subservices_tbl` (`subser_id`, `service_id`, `subser_img`) VALUES
(1, 1, '../uploads/food1 (1).jpg'),
(2, 1, '../uploads/food2 (1).jpg'),
(3, 1, '../uploads/food3 (1).jpg'),
(4, 2, '../uploads/001 (1).jpg'),
(5, 2, '../uploads/002 (1).jpg'),
(6, 2, '../uploads/003  gallery.jpg'),
(7, 2, '../uploads/004 gallery.jpg'),
(8, 2, '../uploads/005 gallery.jpg'),
(9, 2, '../uploads/006.jpg'),
(10, 0, '../uploads/009  gallery.jpg'),
(11, 2, '../uploads/010  gallery.jpg'),
(12, 2, '../uploads/012 gallery.jpg'),
(13, 2, '../uploads/015 gallery.jpg'),
(14, 2, '../uploads/12 (1).jpg'),
(15, 2, '../uploads/04 (2).jpg'),
(16, 3, '../uploads/01 (21).jpg'),
(17, 3, '../uploads/02 (21).jpg'),
(18, 3, '../uploads/03 (20).jpg'),
(19, 4, '../uploads/01 (22).jpg'),
(20, 4, '../uploads/02 (22).jpg'),
(21, 4, '../uploads/03 (21).jpg'),
(22, 4, '../uploads/04 (19).jpg'),
(23, 4, '../uploads/05 (19).jpg'),
(24, 4, '../uploads/06 (19).jpg'),
(25, 5, '../uploads/01 (23).jpg'),
(26, 5, '../uploads/02 (23).jpg'),
(27, 5, '../uploads/03 (22).jpg'),
(28, 5, '../uploads/04 (20).jpg'),
(29, 5, '../uploads/05 (20).jpg'),
(30, 5, '../uploads/06 (20).jpg'),
(31, 5, '../uploads/08 (4).jpg'),
(32, 5, '../uploads/09 (3).jpg'),
(33, 6, '../uploads/01 (24).jpg'),
(34, 6, '../uploads/02 (13).jpg'),
(35, 6, '../uploads/03 (23).jpg'),
(36, 6, '../uploads/04 (21).jpg'),
(37, 6, '../uploads/05 (21).jpg'),
(38, 6, '../uploads/14.jpg'),
(39, 6, '../uploads/13 (1).jpg'),
(40, 6, '../uploads/10 (1).jpg'),
(41, 6, '../uploads/11 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `substories_tbl`
--

CREATE TABLE `substories_tbl` (
  `substor_id` int(5) NOT NULL,
  `stories_id` int(5) NOT NULL,
  `substor_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `substories_tbl`
--

INSERT INTO `substories_tbl` (`substor_id`, `stories_id`, `substor_img`) VALUES
(1, 1, '../uploads/a-1.jpg'),
(2, 1, '../uploads/A-2.jpg'),
(3, 1, '1677672780.jpg'),
(4, 1, '1677672757.jpg'),
(5, 1, '../uploads/A-5.jpg'),
(6, 1, '../uploads/A-6.jpg'),
(7, 1, '../uploads/A-7.jpg'),
(8, 1, '../uploads/A-11.jpg'),
(9, 1, '../uploads/A-15.jpg'),
(10, 2, '../uploads/A-2-1.jpg'),
(12, 2, '../uploads/A-3-1.jpg'),
(13, 2, '../uploads/A-4-1.jpg'),
(14, 2, '../uploads/A-5-1.jpg'),
(15, 2, '../uploads/A-6-1.jpg'),
(16, 2, '../uploads/A-7-1.jpg'),
(17, 2, '../uploads/A-8-1.jpg'),
(18, 2, '../uploads/A-9-1.jpg'),
(19, 2, '../uploads/A-10-1.jpg'),
(20, 3, '../uploads/B-1.jpg'),
(21, 3, '../uploads/B-2.jpg'),
(22, 3, '../uploads/B-3.jpg'),
(23, 3, '../uploads/B-4.jpg'),
(24, 3, '../uploads/B-5.jpg'),
(25, 3, '../uploads/B-6.jpg'),
(26, 3, '../uploads/B-9.jpg'),
(27, 3, '../uploads/B-11.jpg'),
(28, 3, '../uploads/B-13.jpg'),
(29, 4, '../uploads/Y-1.jpg'),
(30, 4, '../uploads/Y-2.jpg'),
(31, 4, '../uploads/Y-4.jpg'),
(32, 4, '../uploads/Y-8.jpg'),
(33, 4, '../uploads/Y-11.jpg'),
(35, 4, '../uploads/Y-12.jpg'),
(36, 4, '../uploads/Y-13.jpg'),
(37, 4, '../uploads/Y-15.jpg'),
(38, 4, '../uploads/Y-16.jpg'),
(39, 5, '../uploads/AA-1.jpg'),
(40, 5, '../uploads/AA-2.jpg'),
(41, 5, '../uploads/AA-3.jpg'),
(42, 5, '../uploads/AA-4.jpg'),
(43, 5, '../uploads/AA-6.jpg'),
(44, 5, '../uploads/AA-7.jpg'),
(45, 5, '../uploads/AA-8.jpg'),
(46, 5, '../uploads/AA-9.jpg'),
(47, 5, '../uploads/AA-11.jpg'),
(48, 6, '../uploads/P-0.jpg'),
(49, 6, '../uploads/P-1.jpg'),
(50, 6, '../uploads/P-2.jpg'),
(51, 6, '../uploads/P-3.jpg'),
(52, 6, '../uploads/P-5.jpg'),
(53, 6, '../uploads/P-6.jpg'),
(56, 6, '../uploads/P-7.jpg'),
(57, 6, '../uploads/P-9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cust_tbl`
--
ALTER TABLE `cust_tbl`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dest_tbl`
--
ALTER TABLE `dest_tbl`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_tbl`
--
ALTER TABLE `hotel_tbl`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `services_tbl`
--
ALTER TABLE `services_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `stories_tbl`
--
ALTER TABLE `stories_tbl`
  ADD PRIMARY KEY (`stories_id`);

--
-- Indexes for table `subservices_tbl`
--
ALTER TABLE `subservices_tbl`
  ADD PRIMARY KEY (`subser_id`);

--
-- Indexes for table `substories_tbl`
--
ALTER TABLE `substories_tbl`
  ADD PRIMARY KEY (`substor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cust_tbl`
--
ALTER TABLE `cust_tbl`
  MODIFY `cust_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dest_tbl`
--
ALTER TABLE `dest_tbl`
  MODIFY `dest_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hotel_tbl`
--
ALTER TABLE `hotel_tbl`
  MODIFY `hotel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `services_tbl`
--
ALTER TABLE `services_tbl`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stories_tbl`
--
ALTER TABLE `stories_tbl`
  MODIFY `stories_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subservices_tbl`
--
ALTER TABLE `subservices_tbl`
  MODIFY `subser_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `substories_tbl`
--
ALTER TABLE `substories_tbl`
  MODIFY `substor_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
