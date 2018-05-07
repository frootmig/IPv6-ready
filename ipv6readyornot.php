<?php
header("Content-type: image/gif");
if (strpos($_SERVER['REMOTE_ADDR'], ':') === false) {
  // ipv6_notready.gif
  echo hex2bin('47494638396158001f00e60000000000ffffff05245b0d2f6414396d1c4475244e7e2b59873364903b6e994279a14a83aa528eb35999bc61a3c569aecd70b8d655aaca5db0cf65b6d478c3dfbae6f7cecec6eeeeed2921089e978099927c958d7599917abdbab2bcb9b1c1c0bd5a4a215b4b2263522964532a65542b999280948c7b999283dcd4c3e5decfbfbaaf5242219a8c6fe4d9c3e4dac5e5ddcde5e0d6bdb9b1e5dcccbcb6abbdb9b2bcb8b1e5dfd5fbf5ebfcf7ef9a9081e3d6c2e3d7c7bcb7b0bbb6afbbb5aefbf5ee7b736bbcb7b2ecebea635a52bcb4adbcb0a8bcb4afb15644b15747fcf6f5bb6256c76b5cc76c5efbf4f3bb3e31c76155c86257bb6257daaaa4e5b6b1eac4c0f0d4d1bd463abe473bbf493dca695fce756ccf776ed3827ae1c4c1bbb8b8fdfafabfbdbdeeeeeededededdddddd6d6d6cecececcccccc6c6c6bbbbbbaaaaaa9999998888887777777373736666666363635a5a5a555555444444333333222222111111ffffff00000000000000000000000000000000000000000000000000000021f90401000076002c0000000058001f000007ff80658283848586878865168b8c8d8e8f909191676276969665149a9b9c9d9e9fa001a2a3a4a5a6a7a8a73060199798a0b0b1b0a9b4b5b601303e1aae7699b2bfbfb7a5616bc2a9303d27bcbec0cd9fc6a37572d0aa3dbbaeccceda9aa3686b66717269a2616c726e66016a0074c5d4a436c9cbdbf414a36bec6b7500630173756bfe8d610340da3b52c8ae5dca560fd83d006a02e043b32ee218006e0200987670143265d81a6a7b884622006f27456dd4c8b1232e6bf3282c50d04093829b3819347b70d301279226518e0b03200e4b97a2e29588694080024d02a24a155000822c0553176c023a714c9d3968dca46437ee56122aa61232750a5500829b07ffa23e85d5206a82a603b68a9a1834809939ec229aac63368b9329a552f0e060c7899357149ace8d5a531302010678cea5a099c2e5a7100c2478c00d29ad26861d231685e3050f168e1df7d224b96d650a0930431820c02705ac06281010d0c0c1edd2a64fa18ead5ad40d19448e3077e2ab3605b90d1a28e0fdf432024dc3b5468d2b60806f7bc9d5c84937eacb96e98703dcd8a1047e75b6d7a746ad4ac141f9feffe587196f0358859e697c91e21e7c53fcc0047cb34586df7e0654a880811414200003b97d971f68dc21e78d1972ac41cc39fd048046386e84214a1ae71044913b63ace1c57bd33d016184d651060a56080ce79b869559f7d03e6bc45107ff1b74d4118657721094111a00cc41d049f8a493e582f031b7106d1312070a04e50940c0269f51004178c8e163d4456c04900644018c31c69cd3c4c14f0062a101a73f7488c265972149389998a05c861f80540d57609b295109c0a400982847412b5dba574a71cc41943b017ca105a185f688e8270c4485a14cbc99791e50660010e743c5aca4a78b32aa53e99e828ebae397227d925d274005d0641a6ed481d21af84cb38e1b69ec535218757cd51e8ea442166c309b96e4d7a54b0610c6a57228896b417d8a2296608376f998b6dbc6929c2962b9d8ae6350ecc850bccfcc2b0a8918858a6d6c537cb10484fbf24bacbf75ae2118170c8aa24314f6292c2f9cc3a554810573ab05e08211487899b0c5c8613c4a155734374a0b41e4101bbc247372811034d76cf3cd38e78c7317564871330a606cd0d82564543041044827adf4d24c37bdb4042a785083d41e483db5d53564adf5d65bc710030d347400760c1e143175d65ecff08109bc9cd1c61b70c40df7dc70d06d77dd78df0d77dc43802082df80ff2d78e0840f6e780824803042088683e0f80a1800c14b20003b');
} else {
  // ipv6_ready.gif
  echo hex2bin('47494638396158001f00f70000000000ffffff05245b0d2f6414396d1c4475244e7e2b59873364903b6e994279a14a83aa528eb35999bc61a3c569aecd70b8d655aaca5db0cf65b6d478c3dfbae6f7fdfefdd7ebce6db54977ba5679bb587abb5a7cbd5c82be6488c36b8fc674a9d394b3d9a1c6e2b8cde6c1eef6eaf3f9f06fb64b70b34b73b55075b85276b9547bbc5a87c26995c97a9bcc829fce87b9dba7d1e7c5ddeed485b669f0f7ecf5faf28cb771cedec491c06edde5d77ba956a0b78cfcfdfbb9cd9c889d61eff4e5b5b8a8b4b7a5b7b8abb8b8accecec6eeeeedd7d6b895926d2921089e978099927c999077958d7599917abdbab2bcb9b1c1c0bd5a4a215b4b2263522964532a65542b999280998e74948c7b999283dcd4c3e5decfbfbaaf524221e4d9c3e4dac5e5ddcde5e0d6bdb9b1e4dbcbe5dcccbcb6abbdb9b2bcb8b1e5dfd5fbf5ebfcf7effdf9f3bcb7b0bbb6afbdb8b2bbb5ae7b736bbcb7b2ecebea635a52bfbdbdeeeeeededededdddddd6d6d6cecececcccccc6c6c6bbbbbbaaaaaa9999998888887777777373736666666363635a5a5a555555444444333333222222111111ffffff00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000021f9040100008a002c0000000058001f000008ff00f3081c48b0a0c18308f31059c8b0a1c387102346dc634791458b792868dcc8b1a3c78f2003881c49b2a4c993284f86a193e42246903063c24c49b3a6cd0061de2871a928a3cc9f3f6fdaf463488f509c6db2f0f409b4e9c7a334ff00e073344c9b9d2e993addaa71249f3f7a0cfda9f3c790a03b22f914325b47641fb380a6faf923f2ce1faa27d1245dcab52f8591521301f8532811204489eadc496428aea0007c001c8a3b55aa51cb28ad62bda8d52f50c0000a05b8030050803e00fc8cbe83da50804200d00a9a4adaf4214429ad2acdea792b68aa9101081f5cc71000c1ae8d8b944ab5d0a13a83735fe54b618182061a1568dfcea0e903ed0e38feff0ea0a73449a97401b886dd362e553f8363a7d46b85ba01010a340ad8cf5f4001083229d0df021b8d1700627d0892c8578349e51a7c82f4211855752492c8213469a608069c69745f7e14ec87807607ec0722480dec97c07d0314b8dc542285759c69c5a957587bc7cd86d76caaa5b4051b4d602024873e7da89f00d869848000067c77a293142c991f040624f0405750dd345b5b28a901061b3e0c296491f81d992405093009c100028447818006504000920e9c89659629c9f8584a699011c40962624026882636d080026ce6b724021acd49e07e250a30809b7fe199925d3df239c60c81f6e4619921f6b7df7f14382069a9a786ca249b030058a9a5b006ffb0460f8112f929a1fe19a0ab02ae525080000ca4c968a853267a67ac25f160d30f2974ea290546866a2747022230a79bbf26192db226f1e0410816d0e482b3cf46bbdfb41b4120a900046c24250510387a2cb7018020e40734a03442ad1d420beab9302d092aaafecdd9eabcc8ee3ba4061798544206e496fb2f923031b05fafd5b1c92ea5f48a44820ab5824bd20b113fdb9b478676d4b1483098502bbe22c510a80ed49d1cd4ca01c8c041ad0cd7b08298281c51b3cd31e12c52092dd48a010b81ee70c5d044876434cb2e2b2d240e6e2c0175d41e4d3d92ce56ab60441cbbf5cbb5d45e0780b4d2227c11c7662f9d8d76da01b42c660b017841f6d6726b7f54841c80072ef8e084175ef80d1b60d0810a39c8a1051d4cf0844705134460f9e59867aef9e6994bc0c5136780fe04e8a1937ec6e9a8a79eba186298618613ae8b313a1036083104eb654081054f7b04320821c0ff2e3c21c3174ffcf1c6ff0efc1c514cd1fcf3ce470ffdf4d2572f451551502145f55174df051270f01410003b');
}
