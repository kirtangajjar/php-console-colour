<?php

declare(strict_types=1);

namespace AlecRabbit\Console\Color\Core\Contracts;

final class Tables
{
// TODO convert table for 16colors to 256colors and truecolor
//                       8bit    4bit    4bit     24bit
// Black                 00      30      40       000000
// Red                   01      31      41       800000
// Green                 02      32      42       008000
// Yellow                03      33      43       808000
// Blue                  04      34      44       000080
// Magenta               05      35      45       800080
// Cyan                  06      36      46       008080
// White                 07      37      47       c0c0c0  
// Bright Black          08      90      100      808080
// Bright Red            09      91      101      ff0000
// Bright Green          10      92      102      00ff00
// Bright Yellow         11      93      103      ffff00
// Bright Blue           12      94      104      0000ff
// Bright Magenta        13      95      105      ff00ff
// Bright Cyan           14      96      106      00ffff
// Bright White          15      97      107      ffffff

    public const COLORS_8_TO_24 = [
        0 => '000000',
        1 => '800000',
        2 => '008000',
        3 => '808000',
        4 => '000080',
        5 => '800080',
        6 => '008080',
        7 => 'c0c0c0',
        8 => '808080',
        9 => 'ff0000',
        10 => '00ff00',
        11 => 'ffff00',
        12 => '0000ff',
        13 => 'ff00ff',
        14 => '00ffff',
        15 => 'ffffff',
        16 => '000000',
        17 => '00005f',
        18 => '000087',
        19 => '0000af',
        20 => '0000d7',
        21 => '0000ff',
        22 => '005f00',
        23 => '005f5f',
        24 => '005f87',
        25 => '005faf',
        26 => '005fd7',
        27 => '005fff',
        28 => '008700',
        29 => '00875f',
        30 => '008787',
        31 => '0087af',
        32 => '0087d7',
        33 => '0087ff',
        34 => '00af00',
        35 => '00af5f',
        36 => '00af87',
        37 => '00afaf',
        38 => '00afd7',
        39 => '00afff',
        40 => '00d700',
        41 => '00d75f',
        42 => '00d787',
        43 => '00d7af',
        44 => '00d7d7',
        45 => '00d7ff',
        46 => '00ff00',
        47 => '00ff5f',
        48 => '00ff87',
        49 => '00ffaf',
        50 => '00ffd7',
        51 => '00ffff',
        52 => '5f0000',
        53 => '5f005f',
        54 => '5f0087',
        55 => '5f00af',
        56 => '5f00d7',
        57 => '5f00ff',
        58 => '5f5f00',
        59 => '5f5f5f',
        60 => '5f5f87',
        61 => '5f5faf',
        62 => '5f5fd7',
        63 => '5f5fff',
        64 => '5f8700',
        65 => '5f875f',
        66 => '5f8787',
        67 => '5f87af',
        68 => '5f87d7',
        69 => '5f87ff',
        70 => '5faf00',
        71 => '5faf5f',
        72 => '5faf87',
        73 => '5fafaf',
        74 => '5fafd7',
        75 => '5fafff',
        76 => '5fd700',
        77 => '5fd75f',
        78 => '5fd787',
        79 => '5fd7af',
        80 => '5fd7d7',
        81 => '5fd7ff',
        82 => '5fff00',
        83 => '5fff5f',
        84 => '5fff87',
        85 => '5fffaf',
        86 => '5fffd7',
        87 => '5fffff',
        88 => '870000',
        89 => '87005f',
        90 => '870087',
        91 => '8700af',
        92 => '8700d7',
        93 => '8700ff',
        94 => '875f00',
        95 => '875f5f',
        96 => '875f87',
        97 => '875faf',
        98 => '875fd7',
        99 => '875fff',
        100 => '878700',
        101 => '87875f',
        102 => '878787',
        103 => '8787af',
        104 => '8787d7',
        105 => '8787ff',
        106 => '87af00',
        107 => '87af5f',
        108 => '87af87',
        109 => '87afaf',
        110 => '87afd7',
        111 => '87afff',
        112 => '87d700',
        113 => '87d75f',
        114 => '87d787',
        115 => '87d7af',
        116 => '87d7d7',
        117 => '87d7ff',
        118 => '87ff00',
        119 => '87ff5f',
        120 => '87ff87',
        121 => '87ffaf',
        122 => '87ffd7',
        123 => '87ffff',
        124 => 'af0000',
        125 => 'af005f',
        126 => 'af0087',
        127 => 'af00af',
        128 => 'af00d7',
        129 => 'af00ff',
        130 => 'af5f00',
        131 => 'af5f5f',
        132 => 'af5f87',
        133 => 'af5faf',
        134 => 'af5fd7',
        135 => 'af5fff',
        136 => 'af8700',
        137 => 'af875f',
        138 => 'af8787',
        139 => 'af87af',
        140 => 'af87d7',
        141 => 'af87ff',
        142 => 'afaf00',
        143 => 'afaf5f',
        144 => 'afaf87',
        145 => 'afafaf',
        146 => 'afafd7',
        147 => 'afafff',
        148 => 'afd700',
        149 => 'afd75f',
        150 => 'afd787',
        151 => 'afd7af',
        152 => 'afd7d7',
        153 => 'afd7ff',
        154 => 'afff00',
        155 => 'afff5f',
        156 => 'afff87',
        157 => 'afffaf',
        158 => 'afffd7',
        159 => 'afffff',
        160 => 'd70000',
        161 => 'd7005f',
        162 => 'd70087',
        163 => 'd700af',
        164 => 'd700d7',
        165 => 'd700ff',
        166 => 'd75f00',
        167 => 'd75f5f',
        168 => 'd75f87',
        169 => 'd75faf',
        170 => 'd75fd7',
        171 => 'd75fff',
        172 => 'd78700',
        173 => 'd7875f',
        174 => 'd78787',
        175 => 'd787af',
        176 => 'd787d7',
        177 => 'd787ff',
        178 => 'd7af00',
        179 => 'd7af5f',
        180 => 'd7af87',
        181 => 'd7afaf',
        182 => 'd7afd7',
        183 => 'd7afff',
        184 => 'd7d700',
        185 => 'd7d75f',
        186 => 'd7d787',
        187 => 'd7d7af',
        188 => 'd7d7d7',
        189 => 'd7d7ff',
        190 => 'd7ff00',
        191 => 'd7ff5f',
        192 => 'd7ff87',
        193 => 'd7ffaf',
        194 => 'd7ffd7',
        195 => 'd7ffff',
        196 => 'ff0000',
        197 => 'ff005f',
        198 => 'ff0087',
        199 => 'ff00af',
        200 => 'ff00d7',
        201 => 'ff00ff',
        202 => 'ff5f00',
        203 => 'ff5f5f',
        204 => 'ff5f87',
        205 => 'ff5faf',
        206 => 'ff5fd7',
        207 => 'ff5fff',
        208 => 'ff8700',
        209 => 'ff875f',
        210 => 'ff8787',
        211 => 'ff87af',
        212 => 'ff87d7',
        213 => 'ff87ff',
        214 => 'ffaf00',
        215 => 'ffaf5f',
        216 => 'ffaf87',
        217 => 'ffafaf',
        218 => 'ffafd7',
        219 => 'ffafff',
        220 => 'ffd700',
        221 => 'ffd75f',
        222 => 'ffd787',
        223 => 'ffd7af',
        224 => 'ffd7d7',
        225 => 'ffd7ff',
        226 => 'ffff00',
        227 => 'ffff5f',
        228 => 'ffff87',
        229 => 'ffffaf',
        230 => 'ffffd7',
        231 => 'ffffff',
        232 => '080808',
        233 => '121212',
        234 => '1c1c1c',
        235 => '262626',
        236 => '303030',
        237 => '3a3a3a',
        238 => '444444',
        239 => '4e4e4e',
        240 => '585858',
        241 => '606060',
        242 => '666666',
        243 => '767676',
        244 => '808080',
        245 => '8a8a8a',
        246 => '949494',
        247 => '9e9e9e',
        248 => 'a8a8a8',
        249 => 'b2b2b2',
        250 => 'bcbcbc',
        251 => 'c6c6c6',
        252 => 'd0d0d0',
        253 => 'dadada',
        254 => 'e4e4e4',
        255 => 'eeeeee'
    ];

    public const COLORS_8_TO_24_PARSED =
        [
            0 => [0, 0, 0,],                    // '000000'
            1 => [128, 0, 0,],                  // '800000'
            2 => [0, 128, 0,],                  // '008000'
            3 => [128, 128, 0,],                // '808000'
            4 => [0, 0, 128,],                  // '000080'
            5 => [128, 0, 128,],                // '800080'
            6 => [0, 128, 128,],                // '008080'
            7 => [192, 192, 192,],              // 'c0c0c0'
            8 => [128, 128, 128,],              // '808080'
            9 => [255, 0, 0,],                  // 'ff0000'
            10 => [0, 255, 0,],                 // '00ff00'
            11 => [255, 255, 0,],               // 'ffff00'
            12 => [0, 0, 255,],                 // '0000ff'
            13 => [255, 0, 255,],               // 'ff00ff'
            14 => [0, 255, 255,],               // '00ffff'
            15 => [255, 255, 255,],             // 'ffffff'
            16 => [0, 0, 0,],                   // '000000'
            17 => [0, 0, 95,],                  // '00005f'
            18 => [0, 0, 135,],                 // '000087'
            19 => [0, 0, 175,],                 // '0000af'
            20 => [0, 0, 215,],                 // '0000d7'
            21 => [0, 0, 255,],                 // '0000ff'
            22 => [0, 95, 0,],                  // '005f00'
            23 => [0, 95, 95,],                 // '005f5f'
            24 => [0, 95, 135,],                // '005f87'
            25 => [0, 95, 175,],                // '005faf'
            26 => [0, 95, 215,],                // '005fd7'
            27 => [0, 95, 255,],                // '005fff'
            28 => [0, 135, 0,],                 // '008700'
            29 => [0, 135, 95,],                // '00875f'
            30 => [0, 135, 135,],               // '008787'
            31 => [0, 135, 175,],               // '0087af'
            32 => [0, 135, 215,],               // '0087d7'
            33 => [0, 135, 255,],               // '0087ff'
            34 => [0, 175, 0,],                 // '00af00'
            35 => [0, 175, 95,],                // '00af5f'
            36 => [0, 175, 135,],               // '00af87'
            37 => [0, 175, 175,],               // '00afaf'
            38 => [0, 175, 215,],               // '00afd7'
            39 => [0, 175, 255,],               // '00afff'
            40 => [0, 215, 0,],                 // '00d700'
            41 => [0, 215, 95,],                // '00d75f'
            42 => [0, 215, 135,],               // '00d787'
            43 => [0, 215, 175,],               // '00d7af'
            44 => [0, 215, 215,],               // '00d7d7'
            45 => [0, 215, 255,],               // '00d7ff'
            46 => [0, 255, 0,],                 // '00ff00'
            47 => [0, 255, 95,],                // '00ff5f'
            48 => [0, 255, 135,],               // '00ff87'
            49 => [0, 255, 175,],               // '00ffaf'
            50 => [0, 255, 215,],               // '00ffd7'
            51 => [0, 255, 255,],               // '00ffff'
            52 => [95, 0, 0,],                  // '5f0000'
            53 => [95, 0, 95,],                 // '5f005f'
            54 => [95, 0, 135,],                // '5f0087'
            55 => [95, 0, 175,],                // '5f00af'
            56 => [95, 0, 215,],                // '5f00d7'
            57 => [95, 0, 255,],                // '5f00ff'
            58 => [95, 95, 0,],                 // '5f5f00'
            59 => [95, 95, 95,],                // '5f5f5f'
            60 => [95, 95, 135,],               // '5f5f87'
            61 => [95, 95, 175,],               // '5f5faf'
            62 => [95, 95, 215,],               // '5f5fd7'
            63 => [95, 95, 255,],               // '5f5fff'
            64 => [95, 135, 0,],                // '5f8700'
            65 => [95, 135, 95,],               // '5f875f'
            66 => [95, 135, 135,],              // '5f8787'
            67 => [95, 135, 175,],              // '5f87af'
            68 => [95, 135, 215,],              // '5f87d7'
            69 => [95, 135, 255,],              // '5f87ff'
            70 => [95, 175, 0,],                // '5faf00'
            71 => [95, 175, 95,],               // '5faf5f'
            72 => [95, 175, 135,],              // '5faf87'
            73 => [95, 175, 175,],              // '5fafaf'
            74 => [95, 175, 215,],              // '5fafd7'
            75 => [95, 175, 255,],              // '5fafff'
            76 => [95, 215, 0,],                // '5fd700'
            77 => [95, 215, 95,],               // '5fd75f'
            78 => [95, 215, 135,],              // '5fd787'
            79 => [95, 215, 175,],              // '5fd7af'
            80 => [95, 215, 215,],              // '5fd7d7'
            81 => [95, 215, 255,],              // '5fd7ff'
            82 => [95, 255, 0,],                // '5fff00'
            83 => [95, 255, 95,],               // '5fff5f'
            84 => [95, 255, 135,],              // '5fff87'
            85 => [95, 255, 175,],              // '5fffaf'
            86 => [95, 255, 215,],              // '5fffd7'
            87 => [95, 255, 255,],              // '5fffff'
            88 => [135, 0, 0,],                 // '870000'
            89 => [135, 0, 95,],                // '87005f'
            90 => [135, 0, 135,],               // '870087'
            91 => [135, 0, 175,],               // '8700af'
            92 => [135, 0, 215,],               // '8700d7'
            93 => [135, 0, 255,],               // '8700ff'
            94 => [135, 95, 0,],                // '875f00'
            95 => [135, 95, 95,],               // '875f5f'
            96 => [135, 95, 135,],              // '875f87'
            97 => [135, 95, 175,],              // '875faf'
            98 => [135, 95, 215,],              // '875fd7'
            99 => [135, 95, 255,],              // '875fff'
            100 => [135, 135, 0,],              // '878700'
            101 => [135, 135, 95,],             // '87875f'
            102 => [135, 135, 135,],            // '878787'
            103 => [135, 135, 175,],            // '8787af'
            104 => [135, 135, 215,],            // '8787d7'
            105 => [135, 135, 255,],            // '8787ff'
            106 => [135, 175, 0,],              // '87af00'
            107 => [135, 175, 95,],             // '87af5f'
            108 => [135, 175, 135,],            // '87af87'
            109 => [135, 175, 175,],            // '87afaf'
            110 => [135, 175, 215,],            // '87afd7'
            111 => [135, 175, 255,],            // '87afff'
            112 => [135, 215, 0,],              // '87d700'
            113 => [135, 215, 95,],             // '87d75f'
            114 => [135, 215, 135,],            // '87d787'
            115 => [135, 215, 175,],            // '87d7af'
            116 => [135, 215, 215,],            // '87d7d7'
            117 => [135, 215, 255,],            // '87d7ff'
            118 => [135, 255, 0,],              // '87ff00'
            119 => [135, 255, 95,],             // '87ff5f'
            120 => [135, 255, 135,],            // '87ff87'
            121 => [135, 255, 175,],            // '87ffaf'
            122 => [135, 255, 215,],            // '87ffd7'
            123 => [135, 255, 255,],            // '87ffff'
            124 => [175, 0, 0,],                // 'af0000'
            125 => [175, 0, 95,],               // 'af005f'
            126 => [175, 0, 135,],              // 'af0087'
            127 => [175, 0, 175,],              // 'af00af'
            128 => [175, 0, 215,],              // 'af00d7'
            129 => [175, 0, 255,],              // 'af00ff'
            130 => [175, 95, 0,],               // 'af5f00'
            131 => [175, 95, 95,],              // 'af5f5f'
            132 => [175, 95, 135,],             // 'af5f87'
            133 => [175, 95, 175,],             // 'af5faf'
            134 => [175, 95, 215,],             // 'af5fd7'
            135 => [175, 95, 255,],             // 'af5fff'
            136 => [175, 135, 0,],              // 'af8700'
            137 => [175, 135, 95,],             // 'af875f'
            138 => [175, 135, 135,],            // 'af8787'
            139 => [175, 135, 175,],            // 'af87af'
            140 => [175, 135, 215,],            // 'af87d7'
            141 => [175, 135, 255,],            // 'af87ff'
            142 => [175, 175, 0,],              // 'afaf00'
            143 => [175, 175, 95,],             // 'afaf5f'
            144 => [175, 175, 135,],            // 'afaf87'
            145 => [175, 175, 175,],            // 'afafaf'
            146 => [175, 175, 215,],            // 'afafd7'
            147 => [175, 175, 255,],            // 'afafff'
            148 => [175, 215, 0,],              // 'afd700'
            149 => [175, 215, 95,],             // 'afd75f'
            150 => [175, 215, 135,],            // 'afd787'
            151 => [175, 215, 175,],            // 'afd7af'
            152 => [175, 215, 215,],            // 'afd7d7'
            153 => [175, 215, 255,],            // 'afd7ff'
            154 => [175, 255, 0,],              // 'afff00'
            155 => [175, 255, 95,],             // 'afff5f'
            156 => [175, 255, 135,],            // 'afff87'
            157 => [175, 255, 175,],            // 'afffaf'
            158 => [175, 255, 215,],            // 'afffd7'
            159 => [175, 255, 255,],            // 'afffff'
            160 => [215, 0, 0,],                // 'd70000'
            161 => [215, 0, 95,],               // 'd7005f'
            162 => [215, 0, 135,],              // 'd70087'
            163 => [215, 0, 175,],              // 'd700af'
            164 => [215, 0, 215,],              // 'd700d7'
            165 => [215, 0, 255,],              // 'd700ff'
            166 => [215, 95, 0,],               // 'd75f00'
            167 => [215, 95, 95,],              // 'd75f5f'
            168 => [215, 95, 135,],             // 'd75f87'
            169 => [215, 95, 175,],             // 'd75faf'
            170 => [215, 95, 215,],             // 'd75fd7'
            171 => [215, 95, 255,],             // 'd75fff'
            172 => [215, 135, 0,],              // 'd78700'
            173 => [215, 135, 95,],             // 'd7875f'
            174 => [215, 135, 135,],            // 'd78787'
            175 => [215, 135, 175,],            // 'd787af'
            176 => [215, 135, 215,],            // 'd787d7'
            177 => [215, 135, 255,],            // 'd787ff'
            178 => [215, 175, 0,],              // 'd7af00'
            179 => [215, 175, 95,],             // 'd7af5f'
            180 => [215, 175, 135,],            // 'd7af87'
            181 => [215, 175, 175,],            // 'd7afaf'
            182 => [215, 175, 215,],            // 'd7afd7'
            183 => [215, 175, 255,],            // 'd7afff'
            184 => [215, 215, 0,],              // 'd7d700'
            185 => [215, 215, 95,],             // 'd7d75f'
            186 => [215, 215, 135,],            // 'd7d787'
            187 => [215, 215, 175,],            // 'd7d7af'
            188 => [215, 215, 215,],            // 'd7d7d7'
            189 => [215, 215, 255,],            // 'd7d7ff'
            190 => [215, 255, 0,],              // 'd7ff00'
            191 => [215, 255, 95,],             // 'd7ff5f'
            192 => [215, 255, 135,],            // 'd7ff87'
            193 => [215, 255, 175,],            // 'd7ffaf'
            194 => [215, 255, 215,],            // 'd7ffd7'
            195 => [215, 255, 255,],            // 'd7ffff'
            196 => [255, 0, 0,],                // 'ff0000'
            197 => [255, 0, 95,],               // 'ff005f'
            198 => [255, 0, 135,],              // 'ff0087'
            199 => [255, 0, 175,],              // 'ff00af'
            200 => [255, 0, 215,],              // 'ff00d7'
            201 => [255, 0, 255,],              // 'ff00ff'
            202 => [255, 95, 0,],               // 'ff5f00'
            203 => [255, 95, 95,],              // 'ff5f5f'
            204 => [255, 95, 135,],             // 'ff5f87'
            205 => [255, 95, 175,],             // 'ff5faf'
            206 => [255, 95, 215,],             // 'ff5fd7'
            207 => [255, 95, 255,],             // 'ff5fff'
            208 => [255, 135, 0,],              // 'ff8700'
            209 => [255, 135, 95,],             // 'ff875f'
            210 => [255, 135, 135,],            // 'ff8787'
            211 => [255, 135, 175,],            // 'ff87af'
            212 => [255, 135, 215,],            // 'ff87d7'
            213 => [255, 135, 255,],            // 'ff87ff'
            214 => [255, 175, 0,],              // 'ffaf00'
            215 => [255, 175, 95,],             // 'ffaf5f'
            216 => [255, 175, 135,],            // 'ffaf87'
            217 => [255, 175, 175,],            // 'ffafaf'
            218 => [255, 175, 215,],            // 'ffafd7'
            219 => [255, 175, 255,],            // 'ffafff'
            220 => [255, 215, 0,],              // 'ffd700'
            221 => [255, 215, 95,],             // 'ffd75f'
            222 => [255, 215, 135,],            // 'ffd787'
            223 => [255, 215, 175,],            // 'ffd7af'
            224 => [255, 215, 215,],            // 'ffd7d7'
            225 => [255, 215, 255,],            // 'ffd7ff'
            226 => [255, 255, 0,],              // 'ffff00'
            227 => [255, 255, 95,],             // 'ffff5f'
            228 => [255, 255, 135,],            // 'ffff87'
            229 => [255, 255, 175,],            // 'ffffaf'
            230 => [255, 255, 215,],            // 'ffffd7'
            231 => [255, 255, 255,],            // 'ffffff'
            232 => [8, 8, 8,],                  // '080808'
            233 => [18, 18, 18,],               // '121212'
            234 => [28, 28, 28,],               // '1c1c1c'
            235 => [38, 38, 38,],               // '262626'
            236 => [48, 48, 48,],               // '303030'
            237 => [58, 58, 58,],               // '3a3a3a'
            238 => [68, 68, 68,],               // '444444'
            239 => [78, 78, 78,],               // '4e4e4e'
            240 => [88, 88, 88,],               // '585858'
            241 => [96, 96, 96,],               // '606060'
            242 => [102, 102, 102,],            // '666666'
            243 => [118, 118, 118,],            // '767676'
            244 => [128, 128, 128,],            // '808080'
            245 => [138, 138, 138,],            // '8a8a8a'
            246 => [148, 148, 148,],            // '949494'
            247 => [158, 158, 158,],            // '9e9e9e'
            248 => [168, 168, 168,],            // 'a8a8a8'
            249 => [178, 178, 178,],            // 'b2b2b2'
            250 => [188, 188, 188,],            // 'bcbcbc'
            251 => [198, 198, 198,],            // 'c6c6c6'
            252 => [208, 208, 208,],            // 'd0d0d0'
            253 => [218, 218, 218,],            // 'dadada'
            254 => [228, 228, 228,],            // 'e4e4e4'
            255 => [238, 238, 238,]             // 'eeeeee'

        ];
}