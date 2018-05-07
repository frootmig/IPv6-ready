<?php
header("Content-type: image/png");
if (strpos($_SERVER['REMOTE_ADDR'], ':') === false) {
  // not-ready.png
  echo hex2bin('89504e470d0a1a0a0000000d494844520000009600000032080200000031eeb54d000000097048597300000b1300000b1301009a9c180000000774494d4507d4091b13071a633034e20000001d74455874436f6d6d656e7400437265617465642077697468205468652047494d50ef64256e000009524944415478daed9a7f4c54d915c73f838c2044640619aa65db4e97a2095d88d66c35d518655ba2d53626ae34adbb31a65a614d2469c488a259ab554cac5debb6c6aa60d411c53456d1a1da26c6aea93fb12d365a8280035a4056d461109981db3f9eefe5cd7bf36040d8827ddfcc1f77ee9c7bcebddff3ee39e7de7960c2840913264c983061c2840913264c9878532040c0138837f869a84deb7ba48f1f1aa004deeebfe668c8877f40273c83b3f0def0e67f105408d83648dac31fd5bb0b85eaf1fa467f2660839ba1f4bcf92e6c07c7f070a184487817fe0e025cfd99c01f40c063f800e22116be07e7df7817fe11047c329c5c2821030434856dfd3b20a01bde1d51896c1054a4430f74c2577ad51e01b970137ce0831bb00a22fa8a84afe342ab9c1781db20e07d9d9ef741402500fb40c0a9d7a0622cec8727c133f93efc099ec04ba8819d302e78ec2c38020dd005cd500aa93afda3a110ee43173c802df2ea1443d740c072ddc09f8280ab7df2781c041cec95d013a13c746c285d98aeda85ab41805ba7a702047c04c03f41c04f5ec385677533df126a517720aed7853f81afa9042c705a27733cd8d05210705b37b12a10f0a33e794c850004609201a13f06012f6005c4411cfc0c3a4140f6d0e4c26950292f55aa535e4037bca51af21674c30bb001f00c04a4413e78a00beae013181ff67c5a601e8c963bdf030175f043180756f8167c060276a8c69e8779100f567807ce8380fde1b12754dbb40904cc520dcc04018d10190e8f0741c049038aff0c027e1e3c3c1f045c18ca8af4a9eaa972818042d5904dc1f54eb7cc9d4649adae58339a8f66074b5b479359bf0c02aa8d55258080fbaa9e8bc6eca949f8180494a97aa4a85010268f5f8597d003534251fc390898186a318f87c08501780847824f1499b23f2c7274aa03a13af675c902f3211662609e2cf3bbf0e6630fee6c962713806ee8861e59b22b786267e03fe0572da1333cf6d4244c802ef043320029d0032f7a8f221a15bf012197e09a9f02206054f0f04855b9311415a90616a8050199c151ce220bb48080e9c1a3a6cbb16800c5a1df2036a885b3557e35aa037a614f63548a34bf04600f08f87dbfe6fd25f0818099ffbb5dd83b0a553594b4dacdaa5f6f8000abae14d46c9af05df818445f41f85ff2912c15a25585b4e8ff2e0466c8943ae0390878a7bff32e02017f1d682ef4872271105da8d42f5f97ab1bf541e853e35df860402e3ca3cbbe7a48d13b5ad5f3ddfeb0a7372a3d88d219e32f03e0d12ed7757d56a42b4355a41e10f021440d8d0b01b75c7c6b9e1ee97c2685d6f910036354b970f7805c381b7aa0077e05df84d11005936025fc4d96690401bf003b8c8185f048a76da9317b7aa31faaf8ffc1c06e07361b9ceafa3c172ad974b0ce8521b158a53c5bf7eba7a1265915ea1e3fcc8b923cb9d0354a751b4371a2d166093e71863c172a8892cba89ae09b937ecc3b0e5a0d6e673e825bd0011d701372743662e1d7502b8797a170e16839457d6eb0d73f80cfc00b2fe1dfb00dc6bede5dd73438020fe02574c01df82d7c5b45cb06f9187a1f3e0e950b25c76c865a7809b5b0454ed2218d4a896c0d264626de96ff788833108830391ace888595001c83e7261d230e4a9a7c014e938e11eac26eb807f34d2e4c98306162184567214c12861b151143b19e812d6fead4a9d5d5d59ab6a24ac8f07abd151515a9a9a9bda8cac8c8a8a8a8686f6f7ff8f0e1f2e5cb47e833a12664c85d382858b060417979b9beadc062b1582c16a7d379ebd62d97cbf04db6d4d4d43367ceecdfbfdfe170cc983163d6ac592374a3872461109e9455ab56d5d7d7777575555656a6a7a7abf787f41c69be4a3debd6ad6b6e6ef6f97c870e1d8a8a0a7de97deddab5b973e76ada6a258a647474745757574646464d4d8dc562511c7cfffefdf4f47497cb1572e70921f2f2f23c1e4f201000468d1ab57dfbf69696968e8e0e97cb151b1b2b89399dced3a74f7bbddecece4eb7dbed70bcfa73292a2aaab8b8d8e7f3353535ad5dbb560861b3d91e3f7e3c7efcabbf60ad566b4b4b4b6262622f5c19d9d593a62164305d585656969c9c1c1313b369d3a6ebd7af8713488510e7ce9d4b4a4a72381c6eb7bba8a8482fe67038dadadaac56aba6ad77e1f8f1e3b76edd7af3e64da0b2b25259646666a6d4d9d4d4545050f0e8d1239fcf77f2e4499bcda66870b95c0ae3858585172f5e4c4e4e1e3b766c7171f1debd7ba5fe3b77eecc993367cc9831717171bb76ed3a7af4a8d4bf73e7cef2f2f2c4c4c4a4a424b7db2dcd67cf9e3d1b376e9404b2b2b2ce9e3ddb2757467635a4a94918641726242448ed989818bfdf1fa60b5352529428d7d8d8a8175bb66c59595999beadcf85ededed172e5c983c7932b07af56a25a21e3f7e3c373717080402870f1f4e4848b0d96c252525a5a5a58a860913262816ebebebd3d2d2a47652525253538817546362625a5a5aa4766363a37a15d2c49c4ea7c7e39188deb76fdf92254bfae4cac8ae863435094398724346b9905f478d7af59a416464a4b218354e9d3ab56cd9327ddbc884049bcdf6f4e953bbdd9e9090d0d6d6161f1f0f3c7bf6cc6e7ff5d68bdd6ef77abd2135f8fdfe4020100804babbbb85103d3d3d52fff4e9d32f5fbedcdede2e3d314a7f201050af42d176e2c489a54b97464444dcbb772f3a3aba4fae8cec6ae4d5240c0b17aa9fdf8686068d5aabd5dad6d626651d75bb4f174a0cae59b3262f2fefd8b1577f565eb97245099e76bbfdf9f3e72135783c9ee4e464bdc2868686ecececf8f8788bc5121717a78c6a6868d0ef4260dab469376edc983973e6810307c2e1cac8ae5a5e43c217e1c2b6b6b6499394b703b55f8510e5e5e50e8743ca853b76ecd00ccfccccbc7af5aabe1d8e0bb3b2b2aaaaaaaaaaaa3233a5d7a058b16245494989dd6e8f8f8f3f78f0a01269351a0a0a0adc6e774a4a4a6464645a5a9a22d6dadaba68d1a2a8a828a7d3595a5aaa8c2a2a2a9272a1b40ab5b64b972e5db97265f6ecd9ea4e23ae8cecaa49d390f045b870c3860d5eafd7e8ab10223f3f5faa488b8b8b9568a308ecdebdbbb0b050df0ec7851111111e8fa7aeae4e5d9a6eddbab5b5b5d5e7f3959595a9cb19cdc0f5ebd74b15e3eddbb7172f5e2cf52f5cb8b0a6a6c6eff7d7d6d6e6e4e428a3a2a3a38b8b8b3b3a3a9a9b9ba58a545dfdd7d7d75b2c96705c6864574d9a8684117091515d5d3d65ca147d7ba420373777dbb66d83a870d891f0665fcb8d1b37eeeeddbb13274e34af1347ead20281404e4e8e79696cc2840913264c983061e2ff16ff05a93243d7f12bb81f0000000049454e44ae426082');
} else {
  // ready.png
  echo hex2bin('89504e470d0a1a0a0000000d494844520000009600000032080200000031eeb54d000000097048597300000b1300000b1301009a9c180000000774494d4507d4091b13053b1d6f463e0000001d74455874436f6d6d656e7400437265617465642077697468205468652047494d50ef64256e000008954944415478daed9a7f4c54d915c73f038c20449c196088966d3a5d8a2674215ab3d55463946d8956db98b8dab46e434cb5424d2469c488e2662d5631b1668ddb1aab0e461d514c63141daa6d62ec92fa13db62a325fc72400bc83aea30883303b77f3cdfcb9b79333a2a1a87be6fe68ffbee3bf7dc7bbfe7dd73cebd7341870e1d3a74e8d0a143870e1d3ade210810e16aa49f1f3aa11ade7f79cd495006ff84417804a7e1a3d82161f49850f93d806fbd8c5a335c0ba74737e1db33a18404f810fe01021c2fa3f64f20e03e7c022648811fc059dd846fdf8412f2414077d43abf070286e0c3982561b499d028c745e00608f858a3e76310d008c01e1070e235c6330ef6c283e091fc10fe0c0fe029b4c076181fdc76161c824ef0410fd4408e46ff18a88056f0c11dd82ccf4ee9e8320858ae69f80b107029464d98a75a85ab418053a3a71e04fc0a807f81809fbdc6784e6bc2e7e67091f526a43e378a3f806fa8040c7052237334b8a36520e08666604d20e027b1180ba741a33c55294f790243f09eaac97b30044fc00cc02310900b65e0021fb4c3e7901ef5787a611e8c912b3f0201edf063180f46f80e7c0902b6a9da9e85796002237c006741c05e95c04f41c0135801a9900abf84c1e0298f816e10304bd5b00004744142ec66a40f61922ce0000115aa269b82f39d2199bb10256d608d6e3c212b585a3a2191f56b20a039b2aa3410d0aaaa390f027e1d2c56a621e1331050abaa91bc42792c6e2a0270170e05ef280a647b1864efd40e42b5edf3c902f3210592619e2cf387e8c66309aeec910713802118826159d2173cb053f05ff0aba630a812f80a044c0cf729a84998003ef0431600d9300c4fa2f322ef682c0c8101da404041b09733c802bd20607a70abe9b22f7a85e4d01fc137a88597aaec1a69331a0001f1c1ca13c2752a799adf02b00b04fc31a633522d2a40c011d56c3f55bdbd0a028c9a543064d1446fc2fb205ee484ff0d023e871c485225d2e2e557213043ded75ae13108f860949950c95fbe2967375f57bdfd22f22abcf34a263ca589be5a48de3b4955f37d8db6bf44170bd51fa2b4c7f86bacef0bc3c22927df02ce69f667926b9d0fc93056150b77be920967c3300cc3efe0db3006126112ac84bfcb325d20e0376081b1b010ee69b42dd364a42b3519a9829fab5cf18f46a50917ab66b854f3f68b7031a9094caf7a50522a27ba9142dd464dfd118d3643f08e33ecbe5041a29c46b540dca834e11839447d0589e1043e812fc1034fe13fb005c6bdde59d734380477e0290cc04df83d7c577e1b071be46d682b7c162e164a86f914dae029b4c166394887edf46f20600d3a6213ef8380fee003a091409cceeddb400aac04e0083cd6e988392861f209d8743a62d48443701be6eb5ce8d0a143870e1d3a74bc766e25844ec2bb4645dc9b98cfab4d6fead4a9cdcdcd2165459590e1f178eaebeb7372729ea32a3f3fbfbebebebfbfffeeddbbcb972f8fd16f424dc81b37e18860c18205757575dab20283c16030186c36dbf5ebd71d8e88f7507372724e9d3ab577ef5eabd53a63c68c59b366c5e8420f4bc2087c29ab56adeae8e8f0f97c8d8d8d797979eaf5217d47218f52cdba75eb7a7a7abc5eef8103071213c31e6373f9f2e5b973e78694d54a14c9a4a4249fcf979f9fdfd2d26230181403b7b6b6e6e5e5391c8eb02b4f08515a5aea72b9028100101f1fbf75ebd6dedede81810187c39192922289d96cb693274f7a3c9ec1c141a7d369b53efb6b383131d16eb77bbddeeeeeeeb56bd70a21cc66f3fdfbf7d3d39f5da0301a8dbdbdbd191919cfe12a52bf5ad24208194913d6d6d66665652527276fdab4e9ca952bd1385221c4993367323333ad56abd3e9acaaaad28a59ad56b7db6d341a43ca5a13a6a7a75756565ebb760d686c6c54265950502055767777979797dfbb77cfebf51e3f7edc6c362b1a1c0e87c2784545c5f9f3e7b3b2b2c68d1b67b7db77efde2dd5dfbc7973ce9c3963c78e4d4d4dddb163c7e1c387a5faeddbb7d7d5d56564646466663a9d4e693cbb76eddab871a32450585878faf4e9177215a9df10d2d4248cb009d3d2d2a4727272b2dfef8fd284d9d9d98a97ebeaead28a151515d5d6d66acbda58d8dfdf7feedcb9c9932703ab57af563cead1a3474b4a4a80402070f0e0c1b4b434b3d95c5d5d5d5353a36898306182d2634747476e6eae54ceccccecee0e73bd3c3939b9b7b7572a777575a967210dcc66b3b95c2e89e83d7bf62c59b2e4855c45ea37843435096f30e486f572611fe3e39f5d124a48485026a3c68913278a8a8ab4e5485d48309bcd0f1f3eb4582c6969696eb7db6432018f1e3db2589edd59b3582c1e8f27ac06bfdf1f08040281c0d0d0901062787858aa9f3e7dfac58b17fbfbfba52f46a90f0402ea5928da8e1d3bb66cd9b2b8b8b8dbb76f272525bd90ab48fd86c8ab4978274ca8fe7e3b3b3b43d41a8d46b7db2d451d75f9852694185cb3664d6969e99123d2f5291a1a1a14e769b1581e3f7e1c5683cbe5cacacad22aececec5cba74a9c96432180ca9a9a94aabcece4eed2a04a64d9b76f5ead5993367eedbb72f1aae22f5ab960f21e16d98d0ed764f9aa4dced0d7d1442d4d5d559ad5629166edbb62da4794141c1a54b97b4e5684c585858d8d4d4d4d4d45450205d6264c58a15d5d5d5168bc56432eddfbf5ff1b4211acacbcb9d4e677676764242426e6eae22d6d7d7b768d1a2c4c4449bcd565353a3b4aaaaaa9262a1340bb5b60b172e343434cc9e3d5b5d1989ab48fdaa490b21e16d9870c3860d1e8f27d2a310a2acac4cca48ed76bbe26d14819d3b7756545468cbd198302e2ecee572b5b7b7ab53d3cacacabebe3eafd75b5b5bab4e67421aae5fbf5eca186fdcb8b178f162a97ee1c2852d2d2d7ebfbfadadadb8b8586995949464b7db0706067a7a7aa48c549dfd777474180c86684c18a95f35692124c4c041467373f3942953b4e558414949c9962d5b4650e13b47c2e83e961b3f7efcad5bb7264e9ca81f27c6ead40281407171b17e68ac43870e1d3a74e8d0a1e3ff16ff03abbc874b616a8d990000000049454e44ae426082');
}