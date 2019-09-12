<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class UptimeService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f130a29676f6f676c652f6d6f6e69746f72696e672f76332f75707469" .
            "6d655f736572766963652e70726f746f1214676f6f676c652e6d6f6e6974" .
            "6f72696e672e76331a21676f6f676c652f6d6f6e69746f72696e672f7633" .
            "2f757074696d652e70726f746f1a1e676f6f676c652f70726f746f627566" .
            "2f6475726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f62" .
            "75662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275" .
            "662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f617069" .
            "2f636c69656e742e70726f746f22560a1d4c697374557074696d65436865" .
            "636b436f6e6669677352657175657374120e0a06706172656e7418012001" .
            "280912110a09706167655f73697a6518032001280512120a0a706167655f" .
            "746f6b656e1804200128092294010a1e4c697374557074696d6543686563" .
            "6b436f6e66696773526573706f6e736512450a14757074696d655f636865" .
            "636b5f636f6e6669677318012003280b32272e676f6f676c652e6d6f6e69" .
            "746f72696e672e76332e557074696d65436865636b436f6e66696712170a" .
            "0f6e6578745f706167655f746f6b656e18022001280912120a0a746f7461" .
            "6c5f73697a65180320012805222b0a1b476574557074696d65436865636b" .
            "436f6e66696752657175657374120c0a046e616d6518012001280922760a" .
            "1e437265617465557074696d65436865636b436f6e666967526571756573" .
            "74120e0a06706172656e7418012001280912440a13757074696d655f6368" .
            "65636b5f636f6e66696718022001280b32272e676f6f676c652e6d6f6e69" .
            "746f72696e672e76332e557074696d65436865636b436f6e666967229701" .
            "0a1e557064617465557074696d65436865636b436f6e6669675265717565" .
            "7374122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e4669656c644d61736b12440a13757074696d" .
            "655f636865636b5f636f6e66696718032001280b32272e676f6f676c652e" .
            "6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669" .
            "67222e0a1e44656c657465557074696d65436865636b436f6e6669675265" .
            "7175657374120c0a046e616d6518012001280922420a194c697374557074" .
            "696d65436865636b4970735265717565737412110a09706167655f73697a" .
            "6518022001280512120a0a706167655f746f6b656e18032001280922740a" .
            "1a4c697374557074696d65436865636b497073526573706f6e7365123d0a" .
            "10757074696d655f636865636b5f69707318012003280b32232e676f6f67" .
            "6c652e6d6f6e69746f72696e672e76332e557074696d65436865636b4970" .
            "12170a0f6e6578745f706167655f746f6b656e18022001280932f3090a12" .
            "557074696d65436865636b5365727669636512b7010a164c697374557074" .
            "696d65436865636b436f6e6669677312332e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76332e4c697374557074696d65436865636b436f6e666967" .
            "73526571756573741a342e676f6f676c652e6d6f6e69746f72696e672e76" .
            "332e4c697374557074696d65436865636b436f6e66696773526573706f6e" .
            "7365223282d3e493022c122a2f76332f7b706172656e743d70726f6a6563" .
            "74732f2a7d2f757074696d65436865636b436f6e6669677312a6010a1447" .
            "6574557074696d65436865636b436f6e66696712312e676f6f676c652e6d" .
            "6f6e69746f72696e672e76332e476574557074696d65436865636b436f6e" .
            "666967526571756573741a272e676f6f676c652e6d6f6e69746f72696e67" .
            "2e76332e557074696d65436865636b436f6e666967223282d3e493022c12" .
            "2a2f76332f7b6e616d653d70726f6a656374732f2a2f757074696d654368" .
            "65636b436f6e666967732f2a7d12c1010a17437265617465557074696d65" .
            "436865636b436f6e66696712342e676f6f676c652e6d6f6e69746f72696e" .
            "672e76332e437265617465557074696d65436865636b436f6e6669675265" .
            "71756573741a272e676f6f676c652e6d6f6e69746f72696e672e76332e55" .
            "7074696d65436865636b436f6e666967224782d3e4930241222a2f76332f" .
            "7b706172656e743d70726f6a656374732f2a7d2f757074696d6543686563" .
            "6b436f6e666967733a13757074696d655f636865636b5f636f6e66696712" .
            "d5010a17557064617465557074696d65436865636b436f6e66696712342e" .
            "676f6f676c652e6d6f6e69746f72696e672e76332e557064617465557074" .
            "696d65436865636b436f6e666967526571756573741a272e676f6f676c65" .
            "2e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e66" .
            "6967225b82d3e4930255323e2f76332f7b757074696d655f636865636b5f" .
            "636f6e6669672e6e616d653d70726f6a656374732f2a2f757074696d6543" .
            "6865636b436f6e666967732f2a7d3a13757074696d655f636865636b5f63" .
            "6f6e666967129b010a1744656c657465557074696d65436865636b436f6e" .
            "66696712342e676f6f676c652e6d6f6e69746f72696e672e76332e44656c" .
            "657465557074696d65436865636b436f6e666967526571756573741a162e" .
            "676f6f676c652e70726f746f6275662e456d707479223282d3e493022c2a" .
            "2a2f76332f7b6e616d653d70726f6a656374732f2a2f757074696d654368" .
            "65636b436f6e666967732f2a7d1293010a124c697374557074696d654368" .
            "65636b497073122f2e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "4c697374557074696d65436865636b497073526571756573741a302e676f" .
            "6f676c652e6d6f6e69746f72696e672e76332e4c697374557074696d6543" .
            "6865636b497073526573706f6e7365221a82d3e493021412122f76332f75" .
            "7074696d65436865636b4970731aa901ca41196d6f6e69746f72696e672e" .
            "676f6f676c65617069732e636f6dd241890168747470733a2f2f7777772e" .
            "676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174" .
            "666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f" .
            "6d2f617574682f6d6f6e69746f72696e672c68747470733a2f2f7777772e" .
            "676f6f676c65617069732e636f6d2f617574682f6d6f6e69746f72696e67" .
            "2e7265616442aa010a18636f6d2e676f6f676c652e6d6f6e69746f72696e" .
            "672e76334212557074696d655365727669636550726f746f50015a3e676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f72696e67" .
            "aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e672e5633ca" .
            "021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c56336206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

