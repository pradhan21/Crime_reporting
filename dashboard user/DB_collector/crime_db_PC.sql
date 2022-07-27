-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 09:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_type` varchar(20) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` char(10) DEFAULT NULL,
  `land_line_no` char(10) DEFAULT NULL,
  `email_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(50) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `featured_image` longblob NOT NULL,
  `description1` longtext NOT NULL,
  `add_image` longblob DEFAULT NULL,
  `description2` longtext DEFAULT NULL,
  `date_col` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `sub_title`, `author`, `featured_image`, `description1`, `add_image`, `description2`, `date_col`) VALUES
(8, 'asd', 'asddff', 'qwqee', 0x696d616765732f494d475f32303231313030355f3134343834302e6a7067, ' cscmvam', 0x696d61676573312f494d475f32303231313030355f3134353432342e6a7067, ' cxczvzbgn ', '2022-07-24 12:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE `crimes` (
  `crime_id` int(10) NOT NULL,
  `complaint_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `crime_place` varchar(50) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `crime_evidence` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  `missing_id` int(10) DEFAULT NULL,
  `sms_mobile_no` int(10) DEFAULT NULL,
  `criminal_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criminal_details`
--

CREATE TABLE `criminal_details` (
  `criminal_name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `gender` varchar(6) NOT NULL,
  `hair_type` varchar(20) NOT NULL,
  `skin_color` varchar(20) NOT NULL,
  `race` varchar(10) DEFAULT NULL,
  `description` varchar(700) NOT NULL,
  `records` varchar(700) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal_details`
--

INSERT INTO `criminal_details` (`criminal_name`, `age`, `height`, `weight`, `gender`, `hair_type`, `skin_color`, `race`, `description`, `records`, `image`) VALUES
('', 0, 0, 0, '', '', '', '', '', '', ''),
('al capone', 50, 5.6, 78, 'option', 'option1', 'White', 'Italian Am', 'sometimes known by the nickname &quot;Scarface&quot;, was an American gangster and businessman who attained notoriety during the Prohibition era as the co-founder and boss of the Chicago Outfit. His seven-year reign as a crime boss ended when he went to prison at the age of 33.', '10', ''),
('horr', 45, 5.12, 78, 'male', '1A', 'White', 'Native', '121212', '5', ''),
('jack the ripper', 45, 5.12, 78, 'option', 'option2', 'White', 'Native', 'asdasdsadasd', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `date_col` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `email`, `latitude`, `longitude`, `date_col`) VALUES
(1, '', '27.6931288', '85.303271', '0000-00-00 00:00:00'),
(2, '', '27.6931288', '85.303271', '2023-07-22 08:33:14'),
(3, '', '27.6931288', '85.303271', '0000-00-00 00:00:00'),
(4, '', '27.6931288', '85.303271', '0000-00-00 00:00:00'),
(5, '', '27.6931288', '85.303271', '0000-00-00 00:00:00'),
(6, '', '27.6989149', '85.3380721', '0000-00-00 00:00:00'),
(7, '', '27.6738523', '85.4272302', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `filename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE `investigation` (
  `investigation_id` int(10) NOT NULL,
  `crime_id` int(10) DEFAULT NULL,
  `complaint_id` int(10) DEFAULT NULL,
  `criminal_name` varchar(50) DEFAULT NULL,
  `station_id` int(10) DEFAULT NULL,
  `investigation_del_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investigation_details`
--

CREATE TABLE `investigation_details` (
  `investigation_del_id` int(10) NOT NULL,
  `details` varchar(500) DEFAULT NULL,
  `image` longblob NOT NULL,
  `evidences` varchar(500) NOT NULL,
  `police_id` int(10) DEFAULT NULL,
  `Report-Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investigation_details`
--

INSERT INTO `investigation_details` (`investigation_del_id`, `details`, `image`, `evidences`, `police_id`, `Report-Status`) VALUES
(1, 'First report ', 0x89504e470d0a1a0a0000000d494844520000011c000000b20803000000a74b80f800000090504c5445f6f6f6fefefe000000fffffffbfbfbf4f4f4f0f0f0ededede1e1e1ebebebe6e6e6cececebbbbbbd2d2d2d6d6d6939393dcdcdca5a5a5afafafc4c4c46f6f6f969696747474b3b3b38e8e8e737373686868858585bdbdbd7f7f7fc6c6c6a1a1a15c5c5c5252523030305454544040404747471d1d1d2929293a3a3a0f0f0f6262622525251919190b0b0b3d3d3d3434346de86b9000001df949444154789ced5de77aa3bc120646607a6fa6ba113b7636b9ffbb3b12602c3a6cb289cff7647e6c368e41d2cb68fa0886f9a55ffaa55ffaa55ffaa55ffaa55ffaa55ffaa55ffaa51142e8a767f0bc843257fe85a74335207cb84f77da7f171d5413cb563f175d23247cf94591655588f5ff283a2ca384bbe272d91fa36d9c5b81668a1b9e00357511328da250004160032836f322fe17d16165831ba0d77d9c4db1901c662a78be1d7316008447ee55facfa183186f089a8a2e363fb660e4817d6260cfbdf90912134951b71f9bff183a6c7618c706d3391086578c0ca4dcfe9cae19c27cc38a29661f3dda7cf3ecbf8c86d688987c121a426f569f7bc876533460149d20830920713720f9fc372ce46b887ee6c854faf020fd348b0da60fb5c33d48f7048432a891a9d0917c1394ebff0b3a81f178e648bf5a47af23135867093425f7e434b2c8e24e4540c0612902d670c0cdff2fc40ef224885dad7a92ac9622407661d2df007b2936980e59a3d891137909e3bfb89e08343e00c1f5e2b2dfbdd0bf20a46c88f5212888489634245b80117deab9b2d60a6c30edee8a1deba91ceb29f7ed832b54b6058ff6b6871f5af00a4299092c843a24d8dc0d5eaf041b2f04e3010e4ad76183e9a2566c9141c67157ae003e896e39a2e0017e173e3feb8801c646c498848c16d987546498630c60355b83d9adc606d355c04b47c10690696e0c06232ee4171a1e00e338a2fb9f869081a7291458266c5d0f818c912854c23cf5c66097a9a93efdb1f11dc4943022104f0c0f83f222a1d1c94ecfed47a01c73095f6075c21f023c71808d8cf00fb485d2adccae7f070da19d0c3a97d35b09847867361f0088c533c72f506628b1795508f338504f19ff04fb602b9a66157f0f0da63767778b62d45253fad1787c00d251f86908c649c4ba09d9784f317b875e43f229501ef44704fba8b5d4149b178f0f20785e6b076149c996aa7b1fd0dc1fe0759d8ded17a013f1b0897db3b5b7c45d78671e60a2670507694ae5ee307b9b9e3d71bef1fcaf6b4cbf31ba480072eceb2d78b08d59ff0eb1fcd3288c10b22a6c36171a1b26c26bc2625a7e87cf899c8a0e0251e39ecfd3e86ca25a5083f2a4fb0aa93a941af5d5a1f4ab79c0464a616559ea41fc05e070055b2a41b7ed3fd851b9b5003debbe8a09367cb497296cb0b82914e06f5c8ac5f47ad37888d21205db683b9f8a5fb10eb13a9f8f908ab506a8e7a065b572676202c26643fe3d7c09389c5332689cb4d1c9cbdf21b19f9175781fa3925e37b42c08b9982fb12a8d9d95fee628dd1828e314adc805f0db7210297d4270d8500174f5a08d8d43b191f245d860d557e16d072d7472b3fcd87d3e3b108958426ead3636af22b5c3943f5f060e2756e868a1408d2779e5a7de1326f9b60224691b9b0f89c2e62b8c9c86dcdaaad9c42235a247d4fb132a731463336c47db1e8c9b524e0ff315e631455a8d0e0a29d568aa041c61fb64e020150b1725a4182521de67f3ab7ef85a6cb8e3dd22460635a851099d274bd38878bb43d43c4490230bfed596aae8aec721311f0325a5159a274fc53a88286cd1bdcf172c77434b9ff90cd57abad47b16189bdabc442483193f133848c3138458b9077052bba562d57f800dc7e5f74761330f7472019ecd83405853614ffc9e81dc3a2d6c84d7afc4249174dbdf935b8af578a6fe004726ae2f84cfa4cc45ec54815db337842a6dd6031b7d25369c4cdc10c15782d8b74d126504860e1d91b02068e9f3e421504e9caa7d25044073dbd8f85f8acd4b4422166e56961058a9436a096cca64d0f19301f6f83cfa0aef71802cac3715ed5ce1c7fa8980fa106db56d6c1b6716aae074666083213329d6f108ebe4d6d3ec2b33247abcb28621b1686ca4af086fd1f4c283a46572a31741b374891a124add2014cf020eb2f1d333d33a40eab2d44cc5db1763431c07e8a4c9b5f085f62172ac3421559e051d2c6dc0afe607864ecd73f3f2e5d860db586a9758107822dac1f5b040129f24358c9c18334e1d86d3e8f01c8ccb1b2ffa044fc532b4f1c1ea8bfe250fb039f11c717696e41cb77215c07511cd38ed35bdc7c9dd1cbce0c5e99f5063d78469e3d3fa3fa81698bba7d857d20ebb9c15c360ebab157c7aace65ce4228906be716550c72fb35bef7f8f0e778bf50efbd0f0680ef8ea13a0438aaa58b78c39dd31ba3fcc8f7a21856722d32e05a9cf9d891c2aedc5cf464df72a1a83076f33e9fda79121954a98716cb5da547e2b8d9d556bf8704a588c28482ccbe53e88722fbd309292f81c5dd45174b06af8795b47f89040ae0280750cb7d9f95519ce4ea803ecc9cecf30e7bc91f44cadda3e1f70dfeba3f0a0bdf4c3d8b07e82f74ab5a9f4a02516ab70ba4115880048f81312dba9500476ff59706ea1358a8eb3fd59758e54acc673bdda24465b7d90edf3a1b582ca3ca95bca8a7a5b1103fad3861063a4a3e8443f6b094a114050e5d220665ae090e28176a111046f64398e4a32e7f5871bcb3a7e0a9c04e2740c9ccde9274b93512a4110d4a6b1d8c2c6e1b854a023a58c75a896e36015fee70e64197f50fdb7bf062765d1d51a43c78e7f6e63212700ab2aca03bb959b059d8bda353456b38134d038aee59d02a0ecaf8a2831610f53f83087d10138fe5cd40b4b99bcaaa700a5bd5a75a7b49c434439120289b71fbbee11387fc93d1b0669d731d6318b9fc20659929d55d86c5a994edeeb145033945c210b8180633aeb21f559e3f0f8c16809aa89b01daa8ca113063fc43a622edf536b3aed52c9b9d0f67b5a411dad0c531de5de724845d2180258e626049ee2dcfb9383572ff863e030c79fc1864d792a3c49f34dc70dd4687d5de9a9b6bd48714f0563dcc520227e5470e0f67dfc48c1094a465927f17e44269bf9d08480c9511b9b5642afa803cdb2501556763797587eeba4d7090baf0aceef2b7643f647dcb3aa498e0aac620c1cd8fd442d131b0b430f9fc9f93636ad26ced77b7c99640d506e89ddc08c70c9302e874dedb35e41236a4ca8c3d398b550374814b10cb2035f1d95c93f11bb30e3416cd4b629d8a9026c395f842b4e1dd1cd9e58fe7a16502a8b66713e62f71db4fda9b232c124f93030dbe0e0b56391c35cf83174b6df6f27b3695fa462ea0411da7cc3d1b61036854a3a5b3cd4542226637b1164d287c45c19ddb519bc07cbca66755f827b7768efb4470cd195eaa89d2cbbdf0e0e761c8627d39a583b11dc1252d088d6d7adaa29769e31842fbc32c0a194a5975898404698079092967a7e4f6211ed9bee58020e4675c4126421fdee88290ac7f40335abb270fd417e5bc1f702ccaf2906c3294b01c2b80a10f1b2ca6562e037811f8764385bdeea1e83835d5ebafea5330df3bb2b28913b870dc0a61d24bed0d20833433fd21513b9722419cb8b5f0588c8a72fedaf10e8e84f0ed8b92479337e3b1a34f5bed7ff444130030e6c8c4e0920cd6a58ac20637769072cae64cf785129564ad53cd04e52966e49ad8f36a4b91173d998d0c1ac637cafadb343d3e074750ab1e3a8bf4a55ef3323894a10de7d0b99940094fc85af16a073939b1f1b96c2f222547aae21a9dce3c08c82c342fc9dfe274aec39c6e99d5141e52580ad7aa6ee5a6a639c395fb12cd21e21d701103200a037eef5b28f7cdfddbf70a4cc051311be4e1b1c06c519d66de3e0f0dfd985d54a4f0d4e071d3ad8bcd31e464ef74608c6014b4cc00246343fccbbe18ce1834d22f3e8aee6cdb88c9d01a93be1a91bff290b2a5285f9e8fab2d474b4ef2b6742fa2ce3f4a485477ba6572ab09c736e99c0c492c1fd43d2dc82e6603fd68e75f75d029a842de62b308980a162cfa7724aac1770e2f8a4c0f9b68a1de4cd310edb8b30502623b8f72d86dd818f48aa0d40fc0f1ff0d8c489f6e7b3cba9db921588f5e75ea27dea1017b64880214e28a5afa26ad56cc08d7910e548aaf53de8a02c9b639c5e85e48ec2c68c1a6cac3707d0469637a8c287092ba8046ceed844408398c75b4f042689483f2db27552b2401b50f7ec149b8cc52dea297d8f17217873d8f49b1c28c7017cbdf623cdfd8e17dddbce4fa3626797fa69b3e7a1cee218c4ea89cedac68ef6b1adf352ba2325aa606190b4c79d9b63205036e65e55a3b9df6128d335e3c3d3c87ad89ca9c8cfa6b61f15f7a28ad16be8e4ee2ed6c53c52c95f937bd9e556073ebc067a7ab7a48f8e561079ada758ab35777e690c3ca42493ac231dff3deba064308e436113f6b0e1280f1eead02aab8b527cb08272ed518afd58a9eca43f5679740d5b3a1b81f530cf35f7f3c50facce792ccef9a64095f22aa5714ba71c38f8063762c6fe83a1c35f28710071add441fd73b36bb5a381cbf955158b5a4a24cc7de4382e39bc2ae6e9edfc5144b16dbfa4a4b40e22044ce37b503162146e2659074bab7f8cceacfdd737ffb8a6c985fc59be2b15ac8fa3340cfd6351ecaf46685949c93971757f6c1d6795cd539e92578a69a6ece3072cb4511347a5cb46b5297d452269fb7f5c64cabae3b6563585815d4583a3d70144ec2105d021a2afee3610c86f582dc926df687a6c5ac612095960817eb9b3644b418f65f7ee632bff362a88b4b1c8403383a1de21ca63ae550a34dd00155b24a94fca0921a79a4b4e3c51e18567926f6c52be8e87c9faa3eea9a59f9136ad2ab0a6fba7b6209b4ed8a1e5f8e8389060a10572fd83971bf70ac9566167ba8c8d1d7ad382ee979e97b57b8fe23c6c2a311196ca7723b33d3bde997b725efe0fd191e70280a0d83d87bc9dfdbd7fb1c48657c270773ea472b5af64da92c6b25dad8c1e46925ae708b17770ae9da5ce0652c04bfe193aacafcf0d1f4b4c1f1c6df42a50185e68560e623b7751db75dd1c4ec3399de22da44eeaabf2ca30fb477207e9d3a60411a82962fb5267428853d92b60d94e220bd0c835a7019183499cb403ab31fc7f74ccabb09b515578270408f52c9db1945b67daf2100c93e074c3342818be80be1645ffe400227e34c2ff18da27a644b7477ad225bcaf57f4baba8670d2b0bf5483f3d1931fe69cd421fecbf5ebcd1db4d9cd661c4026d959b65bac35a7fe496022de56c70c501f32447d0d8e591fa7d295c7a40f239be71dd3fd726cccdd2cdf6055a933e53190b3caaa0d0dcaff949d8fc05342060412a428866c879a73bcfefe4089c5cfc103ca177746b0493a276fc8b3aefc40b103ce24af634bc67bf3379563d5cefb618318f4b7be06bacb9ca1ed817827e9b68ef4ae4fbeb44699b5ed59762516685553df2da19d74c79011db752f311c5b9b08321212cd2ebda702d5b6f2879f3f86c712a7670bea177657a3445b820db3aba22bcdbeaa25f3549003c4471303b4a51af634c9116066debfa80467347a85986ce65942f07581416bc669a847ccefcd181b92d90e0cec76731fe719814c9bbe1d910f51d211d2f73f10d69c4ad5111f701a1deb8bcc1d3e9e71e8eaf1364de4892541e40cf629ec0df10f379b3bbedfe1d8392fc8da8f183a7bee6c9b537346ce746805d8f04ba23bc858840d0be9e3611091ec90a658498780bb2cbb1e36ef6d18412149e4416d7514747d72d6ec4ca903b6e5bf20d3879279155e8ee6d0d98f5399d7364be760c74d85be9beb59cb938596bf00fa3667a0efce01fba24030c93998fc69470be4cf9b3bc89c4bc4d4636de8222194101d85aaac6fc2cd8512d8f2492add1a41d033c60bfb9b12184e9c3f107033da1571bfbbffd98d25cc6537eb91d8b455e8c1bf7006b0551f9617cc8303cca55f47479c74cd737aac0322766577734e000aa65301d84af8eb1341eac3abd599ec663d0e74e41b1b916225a2e500f9f36600c07157b742d2019df244c0bca7ecc039037f9a5f813b2310c019b0b11720c34a8127b258e80fd58c0eac2defc87ea4707bd2c18c57b759502107f6b54cf9607f81caa397d61fc43dbf157807ccd3fcba8474489ad337d282e665378bb161d5dda538fd31846c2e7a548d813cb377f3db2b39bb013b3ae67871c8e306e78d488e1290fcdb49be4799bd3f1a3994dbcaa4ce0d20d616b59a216dd6abdba43bc3b6733b5384851021c73711e902fa58a0c4b114d5076c06362467b890dcadb89f0787a431fd0c4452eb752a751b9ef67577c332dae7992ef7c235806089bc40db2eaebd91598bd4506581e7e5616aa8f325dde66b990981b9687a090d9384f6d0bc74927a11762a831680a362143617fb78f4b28d76254de30e295612623576fa2dd250e4102c1117481fad146ceea529f7cc102329dece9d29206443f74ace12b1c743bf0d34521e6683af4bc1985c491d637c31aeb3321d1452ee2f6555f1967372b25d591f05ac3364cac17b0ec9a203ef903b1bf4869cee8c83dc98beaf98435e8820ce2a6062b78963fb1439c4f6234537d1121bb09a5cf5530b6cf57e8cd360ac2b1697fad5f26e761102752a26b097e9d416296a03e54f3c1fac46a93875a7bab77e788143f76bfed3b9a62b7264034bb33903b922369eb561417cf4a282711c0984d4d8945d77201cb9b9a8280ce8287a5ee965292c1522e2c81fcc8eb902e909cbc345d8606b74c4776d0de0ddf9d4f3cdc9735f51d50e43aaf5a6f71598d36d70489d85b7854d3826e2a01384043f026546343c1e5138effe805cf64101725370c2c91b5b773bc3e6261521c4336ead591e7abd149c70d4d8ef96ee43143373633f68910d2a598874cd610e5227c1691c4d60a74378cadc3923ec899b0939d1772bc6bf8afda896083a86ca52684879e7acd225565580428e1c6badefa66268e95db700cf4df826a4cb7e6e5a0671cd7b1ed3f0dddeef6341e727f9afdab274e1b0aaad551aea0c6b0f5e3649967da700bbf17c31ca1add07d9fb14e324b371466472f5a904c0cc981b906c1b4cca7383b04df8b08b81a17d57608a559915d4cb163690405de5e1a4b7fb892a605e46772c7f6ea4303945737c356881850aa41bf1a8e3e1a399a22b683c2ac63ffb190f4c7e3a5127b2da94f403735a66f648b41be0e94a294690b5c48aa3fd8d7bdd668da10ae1d83906acdbf02030e709e36d3e1047ee5655821ed30337ad3240d9d6bb4f29325ebd1e8a8381e45d93f906810627589975425e0d0b8b78c9549cc032fc687f7979b95d8e516825ba8428bb0aaf7b784f908e9e069c64c29b06b44495a24753dd8c5510d5e7867b2e5332ba593a1279dcd43ad1511e7fddb6c2a2c2b3c2d877a3e81a6dd3d0b3ec44d14ca9e9abe816b8641f436ba3b1c1aeefc456007b51c9f323f5399df4acdbb0c1330068e657063a50001de295b5fac259112586c26208131afd817431f854d415046e3c5e01c2c273ce9b1318a6abdeeb6e7393f4ea81a4881b41d4c4b221b81f4504e506eebaa4135bf69e2c37b998d7eefd11efb7cebbc9fe8c3bd3602dabe260ef9dbcf95cd513b929a858c869ee1dcf5737d954956fedafb921f0d1aace4464cf57a6b486c83e3aeb502eed774c58e7716cc485e7cca1fa38821dccc65558d0bd38f322df4e0cdff563cf4e9c24517bee6f593708faaad03852163c9bd6207e4b17b376d1de4560bd8c9fc33714dd1aa4aa1df39c423a1bb600fd162a725730c49d2a02802df125c05a55abcfefd6b8c064637d50b14d3ef63b9b08c4519903dab27001c19c7408bf0821180b8a7b04bf73b41dde68dd5d05cab96ac3daae113bac3f172eedce4579b49120dbeb0bbe74242906bcb37c5ebcf1fe664208f692bc1eebf9ad83ed2130bad83087fac81ee1ba1c1b0659cb3293d44021a511fb38606368b8fc10d435357508490885a0cc35695568e847fb6ed36007626b7427007173169a622fd7e748efa23c3b1576df04ab861413c86fde8002046105e3d41483349f9fa910b10a9ba9c2ddc6c5e961a3dd1a1904f98a86e8cdb2e1e9a1c47d03ede0dff9dd39e9857161baba618864cc36c57cd55c850eb28a9d617b5161f78241c05e1eca0b8b9dfe1192a389a7fda2c46d6b30eb6ecb8d15436705b74d36943d0920ae06072958d046736980c7a0205aa9dd3d5aa7fc53fe4e8b24a17bbe096233871d8487f517955fb50663b5e6b6633315ade8a388035daa981dc4ddea9321d884a4f796089d069e417b1636edba54d0da6d1eac7270032f19ca14a1603a2c304c33e09433457296fbd7fd6e778ddcb858596a8890a0b8d8619227227d0b09fcd7b64100362d9459fb4adeae9a9f923ef72065ad44c6d408e4c9495521a172029ba581edfabe8c12863ea90480eb5a6dda9b867ef33a9b0342b579bc52f51217ec9ba591de86076b4c6b367fd5a745e0d413a92cd6359b0a3141646d48129cec81d3e268fbe0b602d807dd981e805ba383b2486c6c003372cd073c68e3c4a17a5b2d91d780538eabae39bc1b29918ddd01f4d194922c5458200649cff282ec0c71b7e803d0ae34d69041bf6f19c3b3dd067c555aa2c75120005c9615efd1b40e1c80dd0a6878cf2b4f9a52aadc08b0bb6809ef609fa1f8d8166772467febe3f704d25eb5103045cc22c977ba8e871c1e6d27b15237acde48e32fab50a3692538d254dea20d0db2fd6a75cdfb36818d2ef3a550609ec8c1a620d867b7f56296044bf401f71598dbdeb2fa46141e5bb183ecfe160408961c32d6a695e098d15452879cf5c8f088c537e3ad7dfd2cb1f9d7e47a209c4af654dfb1afd5c9e17851c1853a4a86b9610ef08740d8c7c3ad202d8b00e4d7d5da722538bd8c177ac83d367eb95eafc569efa7b15f584df4577c3c32bc63b864728e6052ef1e07d67ef40aa7e4355103cd2920bc2ca9cc0378596d06aee59c1db45845f48e965cdd04791eaa43fc08513e07b4a27060bef4fdfff6225abf3477710ea462281d08292fdc2fe0ce94c0f5692d3867a1a99b43c8397e6c8d30f26d010312288d266de9e14e791808c7b9639b860696dfca5709c603e0ec170443c8f782d5bee74a70e4373bc4ce3021d12a5ca5e4152149d3dc1ea9ac0438b68528b061b1ac5d80ba86395515cd61bfbbc83c2cc31a646eed4359098e7000a484e4048afd3e971a5f14c4b475183d7d0973ea8618213994a9fd15bed6b5ba3b843d6d05e1429f0d0b9da5aeef9d5682c3dcca3d2399a240ef9dd21fbd0e468961d3f3a9f0974f0180be544062255547b8c0eb1981cc6130008afa0b027fb9eb5bdf641d38a83c2568c8bac7fc701a2af50079a09614901b02e4a32f43e9dc39bd9bd6d06f205607db95801938a95b5dd4c14dd15af761f4645d121af307dae3403a0e4106d68e072f1d88cef6bf9aba4dca7cdbd538701c29bee97bb920718baaf11fb4169cc15eddfb1f41ed9be8200c872a40bb68e07cd8682a2f5bded47f60c3bc74cebb0371241002ea804574992d016dd35a70ae93555220f50400b0a7e1e7059bbd0d7c78d8a5b92aa23180b0cbf1c8818071508eedd6f370c463828146280857a6f6d682e34e833fb0428847c24c8048fa1999415abcfc39c5893424c9f8dde3a50958197b60d38574c08e6ff3bef405e5bc4e99af0567bbdab705e16d642b6269529fbd84245d8d5e3f6267d3da6300cefef1720dec44916e8a987edfab327a1004187dadcfbcaef320d682e3afcbc897d7d86395c08d9a2f21119cf8fdf53d0d44e69e0a365d3a44015ef4415873fbd830908ed6f282d3379c215ae741acde56cb6cf5d635701c7d538e4b9fca8969a3d9e9ae386e432b50d534a2dfec05c91595597226ba173c001a2fe50561a0f12f58172b5d0b4eb4a06cb577913416a820a64eebf76a57498a1d6ffddc6cb968da81afdea401ccb5964330759ccf407803e4dbc22e8c8a56abf2b56e517995f3329cd10367a81d7fa8ee0af41713ce159f009beeca78317d7470ff2e03e97128563ddb9516327b5e96b7ec5e670c8b1d10872cc481ef41c629a0ddbf8c05f52d222fba8e26ac3a1007f655bf5d748ad63a9eb7bfc1862409dc217480bf2df120003cbc31691713d8e072f6cc68b2962dea29ee415f669cd64602973de9fe85b01baa67c19cb820a80c6651101d7fa14f2ac78e6bfa7ab6bb2fcaa5af0b07baf5e335753a2bc109e62ae547af44c3e8eca7c30865fed927c7941213b0d33b435e9571bbe4a3ef51c906ec40718dd059098eb1deccb95fca464365b3eef00def22199956c1c5654113043da79a7c417b1fb3d9b156eb2bfa91e3e386692538735dec53d7425cf4b34ea1014384a7c5cb8a15dddeae41fd26317087dc90d2ca1e1b717d65459b568273fc2b65555f0cf6ad7b4411d867230f325d94aa660c4136332b1621fd73f8385dc3c06c5e2e0de865f868b3f1068d4eafcd7a5a050ef0eb1363adebf573fbad69d8ec3d0a7a92c7d1f174793f9df6d7288d0dcf42a6b961dab64efd9e8cfe3de35104161d853045ebc031ffa28ea37503949eda76af726d2cbe2aa1f3a0cea5d669583a8d838377e2a2f31446691d380b4e3399b9036897d6bb4fb57b947326e6851d9761fb6d121c6b6574ab43ebc0e91539ac2780e01036f5b493de51eb32f4325cde33098ebc32bad5a135e0c0fc7b9b96dc05905df87ac527e36fa5ea5e2572c30f66425b1176fb84025909cee06bf4d613462573f739394a049c99f37f9a6b829173bfaacaa8b1abf24f55934dd521f786323eb785a93b956f53dea5b6995b9392e671453ab243c65f17c70e3b9f2b680de7a0ebca06822922969ea81afed5f59674e65727060efdc1e7a7ae4bd758c45d5a59fdf8c5b4e2c8a3d1af4d5ffe4f4febffa55ffaa5bfa2ff018967e5bd362241c10000000049454e44ae426082, 'Evidence - 1\r\nEvidence - 2', 1, 'On - going');

-- --------------------------------------------------------

--
-- Table structure for table `missing_details`
--

CREATE TABLE `missing_details` (
  `missing_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `gender` varchar(6) NOT NULL,
  `hair_type` varchar(20) NOT NULL,
  `skin_color` varchar(20) NOT NULL,
  `race` varchar(10) DEFAULT NULL,
  `description` varchar(700) NOT NULL,
  `missing_date` date DEFAULT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `police_registration`
--

CREATE TABLE `police_registration` (
  `police_id` int(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` char(10) DEFAULT NULL,
  `email_id` varchar(40) NOT NULL,
  `station_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_registration`
--

INSERT INTO `police_registration` (`police_id`, `f_name`, `l_name`, `username`, `password`, `city`, `address`, `contact_no`, `email_id`, `station_id`) VALUES
(1, 'hhh', 'thapa', 'darkdrinker', '202cb962ac59075b964b07152d234b70', 'kathmandu', 'kapan Bhrikuti chok kathmandu', '9860', 'fevib53488@tashjw.com', 2),
(2, 'John', 'Doe', 'Nischal Thapa', '202cb962ac59075b964b07152d234b70', 'kathmandu', 'kapan', '9860777888', 'xefahal827@ovooovo.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `station_id` int(10) NOT NULL,
  `station_name` varchar(200) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` char(10) DEFAULT NULL,
  `no_of_officers` int(10) DEFAULT NULL,
  `criminal_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`station_id`, `station_name`, `city`, `address`, `contact_no`, `no_of_officers`, `criminal_name`) VALUES
(1, 'Kathmandu Valley Police Office', 'Kathmandu', 'Ratna park path, Kathmandu', '01-4231466', NULL, NULL),
(2, 'Kalimati Police Station', 'Kathmandu', 'Kalimati', '01-4270536', NULL, NULL),
(3, 'Maitidevi Police Post', 'Kathmandu', 'Maitidevi', '985-128400', NULL, NULL),
(4, 'Dhobichaur police station', 'Kathmandu', 'Dhobichaur', NULL, NULL, NULL),
(5, 'Maharajgunj Police Station', 'Kathmandu', 'Maharajgunj', '985-128300', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `criminal_name` varchar(50) DEFAULT NULL,
  `station_id` int(10) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `police_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms_mobile_no` int(10) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `liscence_no` varchar(40) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `near_police_station` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `username`, `password`, `liscence_no`, `city`, `address`, `near_police_station`, `email`, `phone`) VALUES
(2, '', '', 'nischal', 'fcea920f7412b5da7be0cf42b8c93759', '111-222-333-6666', 'kathmandu', '', 'kapan police station', '', ''),
(3, 'horr', 'tree', 'Leo', '81dc9bdb52d04dc20036dbd8313ed055', '111-222-333-9999', 'kathmandu', 'kapan Bhrikuti chok kathmandu', 'kapan police station', 'nischalthapa10@hotmail.com', '98601338454'),
(4, 'nischal', 'thapa', 'darkdrinker', '202cb962ac59075b964b07152d234b70', '111-222-333-6666', 'kathmandu', 'kapan Bhrikuti chok kathmandu', 'kapan police station', 'dracula_58@hotmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_complaints`
--

CREATE TABLE `user_complaints` (
  `complaint_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `crime_place` varchar(50) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `crime_evidence` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_complaints`
--

INSERT INTO `user_complaints` (`complaint_id`, `user_id`, `crime_place`, `crime_type`, `crime_evidence`, `image`) VALUES
(1, 3, 'Kathmandu', '', 'bau le hanyo', 'Report_file/crime_db.sql'),
(2, 3, 'Kathmandu', '', 'tauko dukhyo ', 'Report_file/php-8.1.8.tar.gz'),
(3, 3, 'Kathmandu', '', 'project le raat  bhari uthayo re', 'Report_file/Leonardo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD UNIQUE KEY `land_line_no` (`land_line_no`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `crimes`
--
ALTER TABLE `crimes`
  ADD PRIMARY KEY (`crime_id`),
  ADD KEY `complaint_id` (`complaint_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `missing_id` (`missing_id`),
  ADD KEY `sms_mobile_no` (`sms_mobile_no`),
  ADD KEY `criminal_name` (`criminal_name`);

--
-- Indexes for table `criminal_details`
--
ALTER TABLE `criminal_details`
  ADD PRIMARY KEY (`criminal_name`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation`
--
ALTER TABLE `investigation`
  ADD PRIMARY KEY (`investigation_id`),
  ADD KEY `crime_id` (`crime_id`),
  ADD KEY `complaint_id` (`complaint_id`),
  ADD KEY `criminal_name` (`criminal_name`),
  ADD KEY `station_id` (`station_id`),
  ADD KEY `investigation_del_id` (`investigation_del_id`);

--
-- Indexes for table `investigation_details`
--
ALTER TABLE `investigation_details`
  ADD PRIMARY KEY (`investigation_del_id`),
  ADD KEY `police_id` (`police_id`);

--
-- Indexes for table `missing_details`
--
ALTER TABLE `missing_details`
  ADD PRIMARY KEY (`missing_id`);

--
-- Indexes for table `police_registration`
--
ALTER TABLE `police_registration`
  ADD PRIMARY KEY (`police_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`station_id`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD UNIQUE KEY `no_of_officers` (`no_of_officers`),
  ADD KEY `criminal_name` (`criminal_name`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD KEY `criminal_name` (`criminal_name`),
  ADD KEY `station_id` (`station_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `police_id` (`police_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_mobile_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_complaints`
--
ALTER TABLE `user_complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crimes`
--
ALTER TABLE `crimes`
  MODIFY `crime_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigation`
--
ALTER TABLE `investigation`
  MODIFY `investigation_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigation_details`
--
ALTER TABLE `investigation_details`
  MODIFY `investigation_del_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `missing_details`
--
ALTER TABLE `missing_details`
  MODIFY `missing_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_registration`
--
ALTER TABLE `police_registration`
  MODIFY `police_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `station_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sms_mobile_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_complaints`
--
ALTER TABLE `user_complaints`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
