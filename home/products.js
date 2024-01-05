const products = [
  {
    "id": 1,
    "category": "เครป",
    "menu": "แฮม-ไส้กรอก-หมูหยอง",
    "description": "เนื้อเน้นๆ คนรักเนื้อห้ามพลาด",
    "price": 40,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2022031112404803261/detail/menueditor_item_265e7531d39043988cf5be860a1a9e0c_1647002406907814200.webp",

    // "Vanila": "วนิลา",
    // "Charcoal": "ชาลโคล",
    // "TwoTone": "ทูโทน"
  },
  {
    "id": 2,
    "category": "เครป",
    "menu": "ช็อกโกแลต-กล้วย-ฝอยทอง",
    "description": "ใครเลิฟกล้วยช็อค บอกเลยต้องลอง",
    "price": 45,
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1029762938388615228/unknown.png",
    // "Vanila": "วนิลา",
    // "Charcoal": "ชาลโคล",
    // "TwoTone": "ทูโทน"
  },
  {
    "id": 3,
    "category": "เครป",
    "menu": "ไข่-ปููอัด-หมูสับ",
    "description": "ปูและหมูคลุกเคล้าไข่หอม ๆ",
    "price": 40,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021122216362687369/detail/menueditor_item_db131886b50b43c5baf001323c0b9071_1640190980303307200.webp",
    "Vanila": "วนิลา",
    "Charcoal": "ชาลโคล",
    "TwoTone": "ทูโทน"
  },
  {
    "id": 4,
    "category": "เครป",
    "menu": "พิซซ่า-ปูอัด",
    "description": "ใครชอบกินพิซซ่าต้องร้องว้าว",
    "price": 35,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021122215274275935/detail/menueditor_item_b789cfc0c0814fc28dfc3486fd02030e_1640186831335813652.webp"
  },
  {
    "id": 5,
    "category": "เครป",
    "menu": "ไส้กรอก-ปูอัด",
    "description": "ไส้กรอกชิ้นโตๆพร้อมกับปูอัดเนื้อเน้นๆ",
    "price": 30,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2020090212542478046/detail/menueditor_item_80fdcc061a854aa59b9ab85db3df8f06_1599051213625591595.webp"
  },
  {
    "id": 6,
    "category": "เครป",
    "menu": "ไข่-ปูอัด-ไส้กรอก-หมูหยอง",
    "description": "ไส้เยอะล้นทะลัก คุ้มค่าเกินราคา",
    "price": 45,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2022091718152957985/detail/menueditor_item_a0296ec077a14f4e8174da18c1cf2eac_1663438457105229332.webp"
  },
  {
    "id": 7,
    "category": "เครป",
    "menu": "เนย-นม-กล้วยหอม",
    "description": "ที่สุดของความหวานกำลังดี",
    "price": 40,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2020111207013363012/detail/menueditor_item_c16dd467fa464fc4ba77e0dbd93cd8d2_1663526677840801196.webp"
  },
  {
    "id": 8,
    "category": "เครป",
    "menu": "แฮม-หมูหยอง",
    "description": "2เนื้อหมูยอดนิยม ใครได้กินก็ฟินจนต้องบอกต่อ",
    "price": 25,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2020040502020943244/detail/menueditor_item_33f1793834fd41d89849635df771e880_1586052036634853646.webp"
  },
  {
    "id": 9,
    "category": "เครป",
    "menu": "เนย-นม-ซีเรียล",
    "description": "รักเนย คลั่งนม เลิฟโกโก้ครันช์ ครบองค์จบได้ในชิ้นเดียว",
    "price": 20,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021111419072529491/detail/menueditor_item_c17ef5dba18448dca24a5d0751c467c1_1636916828914995822.webp"
  },
  {
    "id": 10,
    "category": "เครป",
    "menu": "พริกเผา-ปูอัด",
    "description": "ปูอัดชิ้นโตคลุกเคล้ากับพริกเผารสจัดจ้าน",
    "price": 30,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021031803482566478/detail/menueditor_item_a22014d3815946b4a55975bf0c98d906_1641747319859696342.webp"
  },
  {
    "id": 11,
    "category": "เครป",
    "menu": "ผักโขม-แฮม-ไข่ดาว",
    "description": "รสผักโขมเย้ายวนใจ",
    "price": 40,
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1029763186473316462/unknown.png"
  },
  {
    "id": 12,
    "category": "เครป",
    "menu": "พริกเผา-หมูหยอง-สาหร่าย",
    "description": "รสแซ่บชวนยั่วน้ำลาย สำหรับชีวิตสายจัดจ้าน",
    "price": 40,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2020090406121780074/detail/menueditor_item_8e90b4d2b8c948f5a6618007da038546_1663442898068717220.webp"
  },
  {
    "id": 13,
    "category": "เครป",
    "menu": "เนย-นม-น้ำตาล",
    "description": "เพราะชีวิตขาดหวานไม่ได้",
    "price": 25,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2020050312050143862/detail/menueditor_item_27ff375e018c4609a5f38c3cc8eee3fe_1663443576247584461.webp"
  },
  {
    "id": 14,
    "category": "เครป",
    "menu": "พริกเผา-แฮม-หมูหยอง",
    "description": "เผ็ดร้อน อร่อยอย่างลงตัว",
    "price": 35,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2022031112404803261/detail/menueditor_item_265e7531d39043988cf5be860a1a9e0c_1647002406907814200.webp"
  },
  {
    "id": 15,
    "category": "เครป",
    "menu": "ไข่-แฮม-ไส้กรอก-ปูอัด-ชีส",
    "description": "ชีสเน้นๆ ไส้เต็มจนทะลัก",
    "price": 50,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021042709534094294/detail/menueditor_item_612ad203591244a69c99f76ce6aa0439_1619517110920033576.webp"
  },
  {
    "id": 16,
    "category": "ชุดสุดคุ้ม",
    "menu": "เครป+น้ำผึ้งมะนาว",
    "description": "เครปกรอบไส้ล้นทะลักฟิน ๆ คู่กับเครื่องดื่มเย็นสดชื่น",
    "price": "ราคาเครป+15",
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1036304501138784326/Photo_Promo1.png"
  },
  {
    "id": 17,
    "category": "ชุดสุดคุ้ม",
    "menu": "เครป:ไส้กรอก-ปูอัด + โต:ไข่+ปูอัด",
    "description": "เอาใจคนรักปูอัด พลาดไม่ได้แม้แต่นาทีเดียว",
    "price": 45,
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1036658675315646485/Photo_Promo4.png"
  },
  {
    "id": 18,
    "category": "ชุดสุดคุ้ม",
    "menu": "เครป+โตเกียว+น้ำ",
    "description": "เครปก็รัก โตเกียวก็ชอบ พร้อมน้ำให้สดชื่น บอกเลยพลาดไม่ได้",
    "price": "ลด20บาท",
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1036308286334574612/Photo_Promo3.png"
  },
  {
    "id": 19,
    "category": "ชุดสุดคุ้ม",
    "menu": "ไข่-แฮม-ไส้กรอก-ปูอัด-ชีส+อเมริกาโน",
    "description": "ฟินๆช่วงเช้าให้สดชื่น เพิ่มพลังให้พร้อมสำหรับวันใหม่",
    "price": 100,
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1036658675865108530/Photo_Promo5.png"
  },
  {
    "id": 20,
    "category": "ชุดสุดคุ้ม",
    "menu": "เครป1ชิ้น",
    "description": "อันเดียวไม่เคยพอ เพราะอร่อยฟินจนอยากกินต่อเรื่อย ๆ",
    "price": "แถม1ชิ้น(รสเดียวกัน)",
    "img": "https://cdn.discordapp.com/attachments/1019574801557364837/1036305075200594051/Photo_Promo2.png"
  },
  {
    "id": 21,
    "category": "เครื่องดื่ม",
    "menu": "ลาเต้",
    "description": "เพลิดเพลินไปกับรสลาเต้หอม นุ่ม ละมุนลิ้น",
    "price": 50,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021042109261691695/detail/menueditor_item_49385deb0d8c4c21a72e98ef4f84f458_1618997138141210432.webp"
  },
  {
    "id": 22,
    "category": "เครื่องดื่ม",
    "menu": "ชานมเย็น",
    "description": "ชานมรสละมุนลิ้น กลมกล่อมเป็นที่หนึ่ง",
    "price": 25,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021101906135326019/detail/menueditor_item_90f8863c889641278bd9a25e19e6ada5_1636942467385086413.webp"
  },
  {
    "id": 23,
    "category": "เครื่องดื่ม",
    "menu": "ชาเขียว",
    "description": "สัมผัสกับชาเขียวรสเข้มข้น",
    "price": 25,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE20220905151221024833/detail/b6debf7b_09e166ed32f9.webp"
  },
  {
    "id": 24,
    "category": "เครื่องดื่ม",
    "menu": "โกโก้",
    "description": "หอมกลิ่มโกโก้แท้ แฟนโกโก้ห้ามพลาด",
    "price": 25,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2022050410202434904/detail/menueditor_item_3fe48816b34142b29b57b135a5a5cb7f_1655139321410982919.webp"
  },
  {
    "id": 25,
    "category": "เครื่องดื่ม",
    "menu": "ชามะนาว",
    "description": "ชามะนาวรสเปรี้ยว หวาน เย็นชื่นใจ",
    "price": 20,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE20220905151230071501/detail/4768a395_3ea127291f9f.webp"
  },
  {
    "id": 26,
    "category": "เครื่องดื่ม",
    "menu": "น้ำมะนาว",
    "description": "น้ำมะนาวแท้ ดับกระหาย คลายร้อน",
    "price": 25,
    "img": "https://www.ajinomotofoodservicethailand.com/wp-content/uploads/2022/01/batch.jpg"
  },
  {
    "id": 27,
    "category": "เครื่องดื่ม",
    "menu": "อเมริกาโน",
    "description": "ดื่มด่ำกาแฟรสเข้มข้น กลมกล่อม",
    "price": 60,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed/items/THITE20220905151147038410/photo/7c0b93b0_3cf76d5000f0.png"
  },
  {
    "id": 28,
    "category": "เครื่องดื่ม",
    "menu": "น้ำอัดลม",
    "description": "ซาบซ่าน ชื่นใจจนลืมร้อน",
    "price": 20,
    "img": "https://fit-d.com/uploads/food/a3e53414c16884a2f78efbd8bd9dc5e7.jpeg"
  },
  {
    "id": 29,
    "category": "เครื่องดื่ม",
    "menu": "น้ำผึ้งมะนาว",
    "description": "ที่สุดของน้ำมะนาวผสมน้ำผึ้งที่อร่อยไม่เหมือนใคร",
    "price": 25,
    "img": "https://img.kapook.com/u/2015/surauch/cook2/e1.jpg"
  },
  {
    "id": 30,
    "category": "เครื่องดื่ม",
    "menu": "น้ำเปล่า",
    "description": "สดชื่น ชื่นใจ",
    "price": 15,
    "img": "https://st.bigc-cs.com/public/media/catalog/product/47/88/8851952350147/8851952350147.jpg"
  },
  {
    "id": 31,
    "category": "โตเกียว",
    "menu": "ไส้ครีม",
    "description": "",
    "price": 5,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092304334771871/detail/menueditor_item_bca279f1d5f94ebf971ca07b47d3a465_1632414517596097204.webp"
  },
  {
    "id": 32,
    "category": "โตเกียว",
    "menu": "ไข่+ปูอัด",
    "description": "",
    "price": 15,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092310320269970/detail/menueditor_item_665e3157b34d45bfbb2d2745c2c5d70b_1632392843095602067.webp"
  },
  {
    "id": 33,
    "category": "โตเกียว",
    "menu": "ไข่+ไส้กรอก+หมูสับ",
    "description": "",
    "price": 20,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021010815243293743/detail/menueditor_item_c45a9dbd8d3543f093a85d90545972f8_1610119394359688008.webp"
  },
  {
    "id": 34,
    "category": "โตเกียว",
    "menu": "ไข่+พริกเผา",
    "description": "",
    "price": 15,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092212533356892/detail/menueditor_item_e71153cad1634acb97c902aa0bbca802_1633142550680976178.webp"
  },
  {
    "id": 35,
    "category": "โตเกียว",
    "menu": "ช็อกโกแลต+ฝอยทอง",
    "description": "",
    "price": 20,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092309212478159/detail/menueditor_item_2892431d1f9342c1860d6f5e7637c3fe_1632388737133234695.webp"
  },
  {
    "id": 36,
    "category": "โตเกียว",
    "menu": "ไข่+หมูสับ",
    "description": "",
    "price": 15,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021010815211930458/detail/menueditor_item_fb438a68fe534208833041df2f1c9aaf_1617075491193694073.webp"
  },
  {
    "id": 37,
    "category": "โตเกียว",
    "menu": "ไข่+พริกเผา",
    "description": "",
    "price": 15,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021071606411787846/detail/menueditor_item_c200567efd4640f2b05a040e5f5bc8f6_1626417445833472426.webp"
  },
  {
    "id": 38,
    "category": "โตเกียว",
    "menu": "ไส้สังขยา",
    "description": "",
    "price": 5,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021010815154464687/detail/menueditor_item_329ffaafcc344e6dac1f99585d339366_1610118906217604733.webp"
  },
  {
    "id": 39,
    "category": "โตเกียว",
    "menu": "ไข่+แฮม+หมูหยอง",
    "description": "",
    "price": 20,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092213050919066/detail/menueditor_item_543924b7a53544d59ac77fa51ee938c2_1632321997979222749.webp"
  },
  {
    "id": 40,
    "category": "โตเกียว",
    "menu": "วนิลา+ฝอยทอง",
    "description": "",
    "price": 15,
    "img": "https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/THITE2021092310265170644/detail/menueditor_item_c8324fd384864f7eb0802cf7b68e47ed_1632392752414313591.webp"
  }
];