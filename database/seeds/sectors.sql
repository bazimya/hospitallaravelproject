-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 12:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `district`, `created_at`, `updated_at`) VALUES
(10101, 'GITEGA', 101, NULL, NULL),
(10102, 'KANYINYA', 101, NULL, NULL),
(10103, 'KIGALI', 101, NULL, NULL),
(10104, 'KIMISAGARA', 101, NULL, NULL),
(10105, 'MAGERAGERE', 101, NULL, NULL),
(10106, 'MUHIMA', 101, NULL, NULL),
(10107, 'NYAKABANDA', 101, NULL, NULL),
(10108, 'NYAMIRAMBO', 101, NULL, NULL),
(10109, 'NYARUGENGE', 101, NULL, NULL),
(10110, 'RWEZAMENYO', 101, NULL, NULL),
(10201, 'BUMBOGO', 102, NULL, NULL),
(10202, 'GATSATA', 102, NULL, NULL),
(10203, 'GIKOMERO', 102, NULL, NULL),
(10204, 'GISOZI', 102, NULL, NULL),
(10205, 'JABANA', 102, NULL, NULL),
(10206, 'JALI', 102, NULL, NULL),
(10207, 'KACYIRU', 102, NULL, NULL),
(10208, 'KIMIHURURA', 102, NULL, NULL),
(10209, 'KIMIRONKO', 102, NULL, NULL),
(10210, 'KINYINYA', 102, NULL, NULL),
(10211, 'NDERA', 102, NULL, NULL),
(10212, 'NDUBA', 102, NULL, NULL),
(10213, 'REMERA', 102, NULL, NULL),
(10214, 'RUSORORO', 102, NULL, NULL),
(10215, 'RUTUNGA', 102, NULL, NULL),
(10301, 'GAHANGA', 103, NULL, NULL),
(10302, 'GATENGA', 103, NULL, NULL),
(10303, 'GIKONDO', 103, NULL, NULL),
(10304, 'KAGARAMA', 103, NULL, NULL),
(10305, 'KANOMBE', 103, NULL, NULL),
(10306, 'KICUKIRO', 103, NULL, NULL),
(10307, 'KIGARAMA', 103, NULL, NULL),
(10308, 'MASAKA', 103, NULL, NULL),
(10309, 'NIBOYE', 103, NULL, NULL),
(10310, 'NYARUGUNGA', 103, NULL, NULL),
(20101, 'BUSASAMANA', 201, NULL, NULL),
(20102, 'BUSORO', 201, NULL, NULL),
(20103, 'CYABAKAMYI', 201, NULL, NULL),
(20104, 'KIBILIZI', 201, NULL, NULL),
(20105, 'KIGOMA', 201, NULL, NULL),
(20106, 'MUKINGO', 201, NULL, NULL),
(20107, 'MUYIRA', 201, NULL, NULL),
(20108, 'NTYAZO', 201, NULL, NULL),
(20109, 'NYAGISOZI', 201, NULL, NULL),
(20110, 'RWABICUMA', 201, NULL, NULL),
(20201, 'GIKONKO', 202, NULL, NULL),
(20202, 'GISHUBI', 202, NULL, NULL),
(20203, 'KANSI', 202, NULL, NULL),
(20204, 'KIBIRIZI', 202, NULL, NULL),
(20205, 'KIGEMBE', 202, NULL, NULL),
(20206, 'MAMBA', 202, NULL, NULL),
(20207, 'MUGANZA', 202, NULL, NULL),
(20208, 'MUGOMBWA', 202, NULL, NULL),
(20209, 'MUKINDO', 202, NULL, NULL),
(20210, 'MUSHA', 202, NULL, NULL),
(20211, 'NDORA', 202, NULL, NULL),
(20212, 'NYANZA', 202, NULL, NULL),
(20213, 'SAVE', 202, NULL, NULL),
(20301, 'BUSANZE', 203, NULL, NULL),
(20302, 'CYAHINDA', 203, NULL, NULL),
(20303, 'KIBEHO', 203, NULL, NULL),
(20304, 'KIVU', 203, NULL, NULL),
(20305, 'MATA', 203, NULL, NULL),
(20306, 'MUGANZA', 203, NULL, NULL),
(20307, 'MUNINI', 203, NULL, NULL),
(20308, 'NGERA', 203, NULL, NULL),
(20309, 'NGOMA', 203, NULL, NULL),
(20310, 'NYABIMATA', 203, NULL, NULL),
(20311, 'NYAGISOZI', 203, NULL, NULL),
(20312, 'RUHERU', 203, NULL, NULL),
(20313, 'RURAMBA', 203, NULL, NULL),
(20314, 'RUSENGE', 203, NULL, NULL),
(20401, 'GISHAMVU', 204, NULL, NULL),
(20402, 'HUYE', 204, NULL, NULL),
(20403, 'KARAMA', 204, NULL, NULL),
(20404, 'KIGOMA', 204, NULL, NULL),
(20405, 'KINAZI', 204, NULL, NULL),
(20406, 'MARABA', 204, NULL, NULL),
(20407, 'MBAZI', 204, NULL, NULL),
(20408, 'MUKURA', 204, NULL, NULL),
(20409, 'NGOMA', 204, NULL, NULL),
(20410, 'RUHASHYA', 204, NULL, NULL),
(20411, 'RUSATIRA', 204, NULL, NULL),
(20412, 'RWANIRO', 204, NULL, NULL),
(20413, 'SIMBI', 204, NULL, NULL),
(20414, 'TUMBA', 204, NULL, NULL),
(20501, 'BURUHUKIRO', 205, NULL, NULL),
(20502, 'CYANIKA', 205, NULL, NULL),
(20503, 'GASAKA', 205, NULL, NULL),
(20504, 'GATARE', 205, NULL, NULL),
(20505, 'KADUHA', 205, NULL, NULL),
(20506, 'KAMEGERI', 205, NULL, NULL),
(20507, 'KIBIRIZI', 205, NULL, NULL),
(20508, 'KIBUMBWE', 205, NULL, NULL),
(20509, 'KITABI', 205, NULL, NULL),
(20510, 'MBAZI', 205, NULL, NULL),
(20511, 'MUGANO', 205, NULL, NULL),
(20512, 'MUSANGE', 205, NULL, NULL),
(20513, 'MUSEBEYA', 205, NULL, NULL),
(20514, 'MUSHUBI', 205, NULL, NULL),
(20515, 'NKOMANE', 205, NULL, NULL),
(20516, 'TARE', 205, NULL, NULL),
(20517, 'UWINKINGI', 205, NULL, NULL),
(20601, 'BWERAMANA', 206, NULL, NULL),
(20602, 'BYIMANA', 206, NULL, NULL),
(20603, 'KABAGALI', 206, NULL, NULL),
(20604, 'KINAZI', 206, NULL, NULL),
(20605, 'KINIHIRA', 206, NULL, NULL),
(20606, 'MBUYE', 206, NULL, NULL),
(20607, 'MWENDO', 206, NULL, NULL),
(20608, 'NTONGWE', 206, NULL, NULL),
(20609, 'RUHANGO', 206, NULL, NULL),
(20701, 'CYEZA', 207, NULL, NULL),
(20702, 'KABACUZI', 207, NULL, NULL),
(20703, 'KIBANGU', 207, NULL, NULL),
(20704, 'KIYUMBA', 207, NULL, NULL),
(20705, 'MUHANGA', 207, NULL, NULL),
(20706, 'MUSHISHIRO', 207, NULL, NULL),
(20707, 'NYABINONI', 207, NULL, NULL),
(20708, 'NYAMABUYE', 207, NULL, NULL),
(20709, 'NYARUSANGE', 207, NULL, NULL),
(20710, 'RONGI', 207, NULL, NULL),
(20711, 'RUGENDABARI', 207, NULL, NULL),
(20712, 'SHYOGWE', 207, NULL, NULL),
(20801, 'GACURABWENGE', 208, NULL, NULL),
(20802, 'KARAMA', 208, NULL, NULL),
(20803, 'KAYENZI', 208, NULL, NULL),
(20804, 'KAYUMBU', 208, NULL, NULL),
(20805, 'MUGINA', 208, NULL, NULL),
(20806, 'MUSAMBIRA', 208, NULL, NULL),
(20807, 'NGAMBA', 208, NULL, NULL),
(20808, 'NYAMIYAGA', 208, NULL, NULL),
(20809, 'NYARUBAKA', 208, NULL, NULL),
(20810, 'RUGARIKA', 208, NULL, NULL),
(20811, 'RUKOMA', 208, NULL, NULL),
(20812, 'RUNDA', 208, NULL, NULL),
(30101, 'BWISHYURA', 301, NULL, NULL),
(30102, 'GASHARI', 301, NULL, NULL),
(30103, 'GISHYITA', 301, NULL, NULL),
(30104, 'GITESI', 301, NULL, NULL),
(30105, 'MUBUGA', 301, NULL, NULL),
(30106, 'MURAMBI', 301, NULL, NULL),
(30107, 'MURUNDI', 301, NULL, NULL),
(30108, 'MUTUNTU', 301, NULL, NULL),
(30109, 'RUBENGERA', 301, NULL, NULL),
(30110, 'RUGABANO', 301, NULL, NULL),
(30111, 'RUGANDA', 301, NULL, NULL),
(30112, 'RWANKUBA', 301, NULL, NULL),
(30113, 'TWUMBA', 301, NULL, NULL),
(30201, 'BONEZA', 302, NULL, NULL),
(30202, 'GIHANGO', 302, NULL, NULL),
(30203, 'KIGEYO', 302, NULL, NULL),
(30204, 'KIVUMU', 302, NULL, NULL),
(30205, 'MANIHIRA', 302, NULL, NULL),
(30206, 'MUKURA', 302, NULL, NULL),
(30207, 'MURUNDA', 302, NULL, NULL),
(30208, 'MUSASA', 302, NULL, NULL),
(30209, 'MUSHONYI', 302, NULL, NULL),
(30210, 'MUSHUBATI', 302, NULL, NULL),
(30211, 'NYABIRASI', 302, NULL, NULL),
(30212, 'RUHANGO', 302, NULL, NULL),
(30213, 'RUSEBEYA', 302, NULL, NULL),
(30301, 'BUGESHI', 303, NULL, NULL),
(30302, 'BUSASAMANA', 303, NULL, NULL),
(30303, 'CYANZARWE', 303, NULL, NULL),
(30304, 'GISENYI', 303, NULL, NULL),
(30305, 'KANAMA', 303, NULL, NULL),
(30306, 'KANZENZE', 303, NULL, NULL),
(30307, 'MUDENDE', 303, NULL, NULL),
(30308, 'NYAKIRIBA', 303, NULL, NULL),
(30309, 'NYAMYUMBA', 303, NULL, NULL),
(30310, 'NYUNDO', 303, NULL, NULL),
(30311, 'RUBAVU', 303, NULL, NULL),
(30312, 'RUGERERO', 303, NULL, NULL),
(30401, 'BIGOGWE', 304, NULL, NULL),
(30402, 'JENDA', 304, NULL, NULL),
(30403, 'JOMBA', 304, NULL, NULL),
(30404, 'KABATWA', 304, NULL, NULL),
(30405, 'KARAGO', 304, NULL, NULL),
(30406, 'KINTOBO', 304, NULL, NULL),
(30407, 'MUKAMIRA', 304, NULL, NULL),
(30408, 'MURINGA', 304, NULL, NULL),
(30409, 'RAMBURA', 304, NULL, NULL),
(30410, 'RUGERA', 304, NULL, NULL),
(30411, 'RUREMBO', 304, NULL, NULL),
(30412, 'SHYIRA', 304, NULL, NULL),
(30501, 'BWIRA', 305, NULL, NULL),
(30502, 'GATUMBA', 305, NULL, NULL),
(30503, 'HINDIRO', 305, NULL, NULL),
(30504, 'KABAYA', 305, NULL, NULL),
(30505, 'KAGEYO', 305, NULL, NULL),
(30506, 'KAVUMU', 305, NULL, NULL),
(30507, 'MATYAZO', 305, NULL, NULL),
(30508, 'MUHANDA', 305, NULL, NULL),
(30509, 'MUHORORO', 305, NULL, NULL),
(30510, 'NDARO', 305, NULL, NULL),
(30511, 'NGORORERO', 305, NULL, NULL),
(30512, 'NYANGE', 305, NULL, NULL),
(30513, 'SOVU', 305, NULL, NULL),
(30601, 'BUGARAMA', 306, NULL, NULL),
(30602, 'BUTARE', 306, NULL, NULL),
(30603, 'BWEYEYE', 306, NULL, NULL),
(30604, 'GASHONGA', 306, NULL, NULL),
(30605, 'GIHEKE', 306, NULL, NULL),
(30606, 'GIHUNDWE', 306, NULL, NULL),
(30607, 'GIKUNDAMVURA', 306, NULL, NULL),
(30608, 'GITAMBI', 306, NULL, NULL),
(30609, 'KAMEMBE', 306, NULL, NULL),
(30610, 'MUGANZA', 306, NULL, NULL),
(30611, 'MURURU', 306, NULL, NULL),
(30612, 'NKANKA', 306, NULL, NULL),
(30613, 'NKOMBO', 306, NULL, NULL),
(30614, 'NKUNGU', 306, NULL, NULL),
(30615, 'NYAKABUYE', 306, NULL, NULL),
(30616, 'NYAKARENZO', 306, NULL, NULL),
(30617, 'NZAHAHA', 306, NULL, NULL),
(30618, 'RWIMBOGO', 306, NULL, NULL),
(30701, 'BUSHEKERI', 307, NULL, NULL),
(30702, 'BUSHENGE', 307, NULL, NULL),
(30703, 'CYATO', 307, NULL, NULL),
(30704, 'GIHOMBO', 307, NULL, NULL),
(30705, 'KAGANO', 307, NULL, NULL),
(30706, 'KANJONGO', 307, NULL, NULL),
(30707, 'KARAMBI', 307, NULL, NULL),
(30708, 'KARENGERA', 307, NULL, NULL),
(30709, 'KIRIMBI', 307, NULL, NULL),
(30710, 'MACUBA', 307, NULL, NULL),
(30711, 'MAHEMBE', 307, NULL, NULL),
(30712, 'NYABITEKERI', 307, NULL, NULL),
(30713, 'RANGIRO', 307, NULL, NULL),
(30714, 'RUHARAMBUGA', 307, NULL, NULL),
(30715, 'SHANGI', 307, NULL, NULL),
(40101, 'BASE', 401, NULL, NULL),
(40102, 'BUREGA', 401, NULL, NULL),
(40103, 'BUSHOKI', 401, NULL, NULL),
(40104, 'BUYOGA', 401, NULL, NULL),
(40105, 'CYINZUZI', 401, NULL, NULL),
(40106, 'CYUNGO', 401, NULL, NULL),
(40107, 'KINIHIRA', 401, NULL, NULL),
(40108, 'KISARO', 401, NULL, NULL),
(40109, 'MASORO', 401, NULL, NULL),
(40110, 'MBOGO', 401, NULL, NULL),
(40111, 'MURAMBI', 401, NULL, NULL),
(40112, 'NGOMA', 401, NULL, NULL),
(40113, 'NTARABANA', 401, NULL, NULL),
(40114, 'RUKOZO', 401, NULL, NULL),
(40115, 'RUSIGA', 401, NULL, NULL),
(40116, 'SHYORONGI', 401, NULL, NULL),
(40117, 'TUMBA', 401, NULL, NULL),
(40201, 'BUSENGO', 402, NULL, NULL),
(40202, 'COKO', 402, NULL, NULL),
(40203, 'CYABINGO', 402, NULL, NULL),
(40204, 'GAKENKE', 402, NULL, NULL),
(40205, 'GASHENYI', 402, NULL, NULL),
(40206, 'JANJA', 402, NULL, NULL),
(40207, 'KAMUBUGA', 402, NULL, NULL),
(40208, 'KARAMBO', 402, NULL, NULL),
(40209, 'KIVURUGA', 402, NULL, NULL),
(40210, 'MATABA', 402, NULL, NULL),
(40211, 'MINAZI', 402, NULL, NULL),
(40212, 'MUGUNGA', 402, NULL, NULL),
(40213, 'MUHONDO', 402, NULL, NULL),
(40214, 'MUYONGWE', 402, NULL, NULL),
(40215, 'MUZO', 402, NULL, NULL),
(40216, 'NEMBA', 402, NULL, NULL),
(40217, 'RULI', 402, NULL, NULL),
(40218, 'RUSASA', 402, NULL, NULL),
(40219, 'RUSHASHI', 402, NULL, NULL),
(40301, 'BUSOGO', 403, NULL, NULL),
(40302, 'CYUVE', 403, NULL, NULL),
(40303, 'GACACA', 403, NULL, NULL),
(40304, 'GASHAKI', 403, NULL, NULL),
(40305, 'GATARAGA', 403, NULL, NULL),
(40306, 'KIMONYI', 403, NULL, NULL),
(40307, 'KINIGI', 403, NULL, NULL),
(40308, 'MUHOZA', 403, NULL, NULL),
(40309, 'MUKO', 403, NULL, NULL),
(40310, 'MUSANZE', 403, NULL, NULL),
(40311, 'NKOTSI', 403, NULL, NULL),
(40312, 'NYANGE', 403, NULL, NULL),
(40313, 'REMERA', 403, NULL, NULL),
(40314, 'RWAZA', 403, NULL, NULL),
(40315, 'SHINGIRO', 403, NULL, NULL),
(40401, 'BUNGWE', 404, NULL, NULL),
(40402, 'BUTARO', 404, NULL, NULL),
(40403, 'CYANIKA', 404, NULL, NULL),
(40404, 'CYERU', 404, NULL, NULL),
(40405, 'GAHUNGA', 404, NULL, NULL),
(40406, 'GATEBE', 404, NULL, NULL),
(40407, 'GITOVU', 404, NULL, NULL),
(40408, 'KAGOGO', 404, NULL, NULL),
(40409, 'KINONI', 404, NULL, NULL),
(40410, 'KINYABABA', 404, NULL, NULL),
(40411, 'KIVUYE', 404, NULL, NULL),
(40412, 'NEMBA', 404, NULL, NULL),
(40413, 'RUGARAMA', 404, NULL, NULL),
(40414, 'RUGENGABARI', 404, NULL, NULL),
(40415, 'RUHUNDE', 404, NULL, NULL),
(40416, 'RUSARABUYE', 404, NULL, NULL),
(40417, 'RWERERE', 404, NULL, NULL),
(40501, 'BUKURE', 405, NULL, NULL),
(40502, 'BWISIGE', 405, NULL, NULL),
(40503, 'BYUMBA', 405, NULL, NULL),
(40504, 'CYUMBA', 405, NULL, NULL),
(40505, 'GITI', 405, NULL, NULL),
(40506, 'KAGEYO', 405, NULL, NULL),
(40507, 'KANIGA', 405, NULL, NULL),
(40508, 'MANYAGIRO', 405, NULL, NULL),
(40509, 'MIYOVE', 405, NULL, NULL),
(40510, 'MUKARANGE', 405, NULL, NULL),
(40511, 'MUKO', 405, NULL, NULL),
(40512, 'MUTETE', 405, NULL, NULL),
(40513, 'NYAMIYAGA', 405, NULL, NULL),
(40514, 'NYANKENKE', 405, NULL, NULL),
(40515, 'RUBAYA', 405, NULL, NULL),
(40516, 'RUKOMO', 405, NULL, NULL),
(40517, 'RUSHAKI', 405, NULL, NULL),
(40518, 'RUTARE', 405, NULL, NULL),
(40519, 'RUVUNE', 405, NULL, NULL),
(40520, 'RWAMIKO', 405, NULL, NULL),
(40521, 'SHANGASHA', 405, NULL, NULL),
(50101, 'FUMBWE', 501, NULL, NULL),
(50102, 'GAHENGERI', 501, NULL, NULL),
(50103, 'GISHALI', 501, NULL, NULL),
(50104, 'KARENGE', 501, NULL, NULL),
(50105, 'KIGABIRO', 501, NULL, NULL),
(50106, 'MUHAZI', 501, NULL, NULL),
(50107, 'MUNYAGA', 501, NULL, NULL),
(50108, 'MUNYIGINYA', 501, NULL, NULL),
(50109, 'MUSHA', 501, NULL, NULL),
(50110, 'MUYUMBU', 501, NULL, NULL),
(50111, 'MWULIRE', 501, NULL, NULL),
(50112, 'NYAKALIRO', 501, NULL, NULL),
(50113, 'NZIGE', 501, NULL, NULL),
(50114, 'RUBONA', 501, NULL, NULL),
(50201, 'GATUNDA', 502, NULL, NULL),
(50202, 'KARAMA', 502, NULL, NULL),
(50203, 'KARANGAZI', 502, NULL, NULL),
(50204, 'KATABAGEMU', 502, NULL, NULL),
(50205, 'KIYOMBE', 502, NULL, NULL),
(50206, 'MATIMBA', 502, NULL, NULL),
(50207, 'MIMURI', 502, NULL, NULL),
(50208, 'MUKAMA', 502, NULL, NULL),
(50209, 'MUSHERI', 502, NULL, NULL),
(50210, 'NYAGATARE', 502, NULL, NULL),
(50211, 'RUKOMO', 502, NULL, NULL),
(50212, 'RWEMPASHA', 502, NULL, NULL),
(50213, 'RWIMIYAGA', 502, NULL, NULL),
(50214, 'TABAGWE', 502, NULL, NULL),
(50301, 'GASANGE', 503, NULL, NULL),
(50302, 'GATSIBO', 503, NULL, NULL),
(50303, 'GITOKI', 503, NULL, NULL),
(50304, 'KABARORE', 503, NULL, NULL),
(50305, 'KAGEYO', 503, NULL, NULL),
(50306, 'KIRAMURUZI', 503, NULL, NULL),
(50307, 'KIZIGURO', 503, NULL, NULL),
(50308, 'MUHURA', 503, NULL, NULL),
(50309, 'MURAMBI', 503, NULL, NULL),
(50310, 'NGARAMA', 503, NULL, NULL),
(50311, 'NYAGIHANGA', 503, NULL, NULL),
(50312, 'REMERA', 503, NULL, NULL),
(50313, 'RUGARAMA', 503, NULL, NULL),
(50314, 'RWIMBOGO', 503, NULL, NULL),
(50401, 'GAHINI', 504, NULL, NULL),
(50402, 'KABARE', 504, NULL, NULL),
(50403, 'KABARONDO', 504, NULL, NULL),
(50404, 'MUKARANGE', 504, NULL, NULL),
(50405, 'MURAMA', 504, NULL, NULL),
(50406, 'MURUNDI', 504, NULL, NULL),
(50407, 'MWIRI', 504, NULL, NULL),
(50408, 'NDEGO', 504, NULL, NULL),
(50409, 'NYAMIRAMA', 504, NULL, NULL),
(50410, 'RUKARA', 504, NULL, NULL),
(50411, 'RURAMIRA', 504, NULL, NULL),
(50412, 'RWINKWAVU', 504, NULL, NULL),
(50501, 'GAHARA', 505, NULL, NULL),
(50502, 'GATORE', 505, NULL, NULL),
(50503, 'KIGARAMA', 505, NULL, NULL),
(50504, 'KIGINA', 505, NULL, NULL),
(50505, 'KIREHE', 505, NULL, NULL),
(50506, 'MAHAMA', 505, NULL, NULL),
(50507, 'MPANGA', 505, NULL, NULL),
(50508, 'MUSAZA', 505, NULL, NULL),
(50509, 'MUSHIKIRI', 505, NULL, NULL),
(50510, 'NASHO', 505, NULL, NULL),
(50511, 'NYAMUGARI', 505, NULL, NULL),
(50512, 'NYARUBUYE', 505, NULL, NULL),
(50601, 'GASHANDA', 506, NULL, NULL),
(50602, 'JARAMA', 506, NULL, NULL),
(50603, 'KAREMBO', 506, NULL, NULL),
(50604, 'KAZO', 506, NULL, NULL),
(50605, 'KIBUNGO', 506, NULL, NULL),
(50606, 'MUGESERA', 506, NULL, NULL),
(50607, 'MURAMA', 506, NULL, NULL),
(50608, 'MUTENDERI', 506, NULL, NULL),
(50609, 'REMERA', 506, NULL, NULL),
(50610, 'RUKIRA', 506, NULL, NULL),
(50611, 'RUKUMBERI', 506, NULL, NULL),
(50612, 'RURENGE', 506, NULL, NULL),
(50613, 'SAKE', 506, NULL, NULL),
(50614, 'ZAZA', 506, NULL, NULL),
(50701, 'GASHORA', 507, NULL, NULL),
(50702, 'JURU', 507, NULL, NULL),
(50703, 'KAMABUYE', 507, NULL, NULL),
(50704, 'MAREBA', 507, NULL, NULL),
(50705, 'MAYANGE', 507, NULL, NULL),
(50706, 'MUSENYI', 507, NULL, NULL),
(50707, 'MWOGO', 507, NULL, NULL),
(50708, 'NGERUKA', 507, NULL, NULL),
(50709, 'NTARAMA', 507, NULL, NULL),
(50710, 'NYAMATA', 507, NULL, NULL),
(50711, 'NYARUGENGE', 507, NULL, NULL),
(50712, 'RIRIMA', 507, NULL, NULL),
(50713, 'RUHUHA', 507, NULL, NULL),
(50714, 'RWERU', 507, NULL, NULL),
(50715, 'SHYARA', 507, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
