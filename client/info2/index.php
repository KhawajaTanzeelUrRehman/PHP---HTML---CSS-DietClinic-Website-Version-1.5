<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Diet Clinic</title>
</head>

<body>
    <?php
            $emailexist = "";
            $submit = "";
            if (!empty($_REQUEST['email'])) {
                $emailexist = $_REQUEST['email'];
            }
            if (!empty($_REQUEST['submit'])) {
                $submit = $_REQUEST['submit'];
            }
            if ($emailexist == "true") {
            ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................email already in
            use..............................................................
        </p>
    </div>
    <?php
            }
            if ($submit == "true") {
            ?>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Form Submitted
            Successfully..............................................................
        </p>
    </div>
    <?php
            }
            ?>




    <div class="container my-4">
        <h3
            style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
            Medical Diagnosis</h3>
        <form id="myform1" method="post" action="../../client/info2/info2.php">
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Food Choices</label>
                <input type="text" name="fc" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Current Medication</label>
                <input type="text" name="cm" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Food Allergies</label>
                <input type="text" name="fa" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="mb-3">
                <label id="#contact" for="input-group-text" class="form-label">Diseases</label>
                <input type="text" name="disease" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label id="#insta" for="input-group-text" class="form-label">Get Up Time *</label>
                <input type="time" required="required" name="gtime" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label id="#insta" for="input-group-text" class="form-label">Sleep_time *</label>
                <input type="time" required="required" name="stime" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Physical Activity *</label>
                <select name="pactivity" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=15>15 minutes</option>
                    <option value=30>30 minutes</option>
                    <option value=45>45 minutes</option>
                    <option value=60>60 minutes</option>
                    <option value=75>75 minutes</option>
                    <option value=90>90 minutes</option>
                    <option value=105>105 minutes</option>
                    <option value=120>120 minutes</option>
                    <option value=135>135 minutes</option>
                    <option value=150>150 minutes</option>
                    <option value=165>165 minutes</option>
                    <option value=180>180 minutes</option>
                </select>
            </div>
            <h3
                style="text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">
                Body Measurements
            </h3>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Height *</label>
                <select name="height" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=45>45 Inches</option>
                    <option value=46>46 Inches</option>
                    <option value=47>47 Inches</option>
                    <option value=48>48 Inches</option>
                    <option value=49>49 Inches</option>
                    <option value=50>50 Inches</option>
                    <option value=51>51 Inches</option>
                    <option value=52>52 Inches</option>
                    <option value=53>53 Inches</option>
                    <option value=54>54 Inches</option>
                    <option value=55>55 Inches</option>
                    <option value=56>56 Inches</option>
                    <option value=57>57 Inches</option>
                    <option value=58>58 Inches</option>
                    <option value=59>59 Inches</option>
                    <option value=60>60 Inches</option>
                    <option value=61>61 Inches</option>
                    <option value=62>62 Inches</option>
                    <option value=63>63 Inches</option>
                    <option value=64>64 Inches</option>
                    <option value=65>65 Inches</option>
                    <option value=66>66 Inches</option>
                    <option value=67>67 Inches</option>
                    <option value=68>68 Inches</option>
                    <option value=69>69 Inches</option>
                    <option value=70>70 Inches</option>
                    <option value=71>71 Inches</option>
                    <option value=72>72 Inches</option>
                    <option value=73>73 Inches</option>
                    <option value=74>74 Inches</option>
                    <option value=75>75 Inches</option>
                    <option value=76>76 Inches</option>
                    <option value=77>77 Inches</option>
                    <option value=78>78 Inches</option>
                    <option value=79>79 Inches</option>
                    <option value=80>80 Inches</option>
                    <option value=81>81 Inches</option>
                    <option value=82>82 Inches</option>
                    <option value=83>83 Inches</option>
                    <option value=84>84 Inches</option>
                    <option value=85>85 Inches</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Current Weight *</label>
                <select name="cweight" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=30>30 Kg</option>
                    <option value=31>31 Kg</option>
                    <option value=32>32 Kg</option>
                    <option value=33>33 Kg</option>
                    <option value=34>34 Kg</option>
                    <option value=35>35 Kg</option>
                    <option value=36>36 Kg</option>
                    <option value=37>37 Kg</option>
                    <option value=38>38 Kg</option>
                    <option value=39>39 Kg</option>
                    <option value=40>40 Kg</option>
                    <option value=41>41 Kg</option>
                    <option value=42>42 Kg</option>
                    <option value=43>43 Kg</option>
                    <option value=44>44 Kg</option>
                    <option value=45>45 Kg</option>
                    <option value=46>46 Kg</option>
                    <option value=47>47 Kg</option>
                    <option value=48>48 Kg</option>
                    <option value=49>49 Kg</option>
                    <option value=50>50 Kg</option>
                    <option value=51>51 Kg</option>
                    <option value=52>52 Kg</option>
                    <option value=53>53 Kg</option>
                    <option value=54>54 Kg</option>
                    <option value=55>55 Kg</option>
                    <option value=56>56 Kg</option>
                    <option value=57>57 Kg</option>
                    <option value=58>58 Kg</option>
                    <option value=59>59 Kg</option>
                    <option value=60>60 Kg</option>
                    <option value=61>61 Kg</option>
                    <option value=62>62 Kg</option>
                    <option value=63>63 Kg</option>
                    <option value=64>64 Kg</option>
                    <option value=65>65 Kg</option>
                    <option value=66>66 Kg</option>
                    <option value=67>67 Kg</option>
                    <option value=68>68 Kg</option>
                    <option value=69>69 Kg</option>
                    <option value=70>70 Kg</option>
                    <option value=71>71 Kg</option>
                    <option value=72>72 Kg</option>
                    <option value=73>73 Kg</option>
                    <option value=74>74 Kg</option>
                    <option value=75>75 Kg</option>
                    <option value=76>76 Kg</option>
                    <option value=77>77 Kg</option>
                    <option value=78>78 Kg</option>
                    <option value=79>79 Kg</option>
                    <option value=80>80 Kg</option>
                    <option value=81>81 Kg</option>
                    <option value=82>82 Kg</option>
                    <option value=83>83 Kg</option>
                    <option value=84>84 Kg</option>
                    <option value=85>85 Kg</option>
                    <option value=86>86 Kg</option>
                    <option value=87>87 Kg</option>
                    <option value=88>88 Kg</option>
                    <option value=89>89 Kg</option>
                    <option value=90>90 Kg</option>
                    <option value=91>91 Kg</option>
                    <option value=92>92 Kg</option>
                    <option value=93>93 Kg</option>
                    <option value=94>94 Kg</option>
                    <option value=95>95 Kg</option>
                    <option value=96>96 Kg</option>
                    <option value=97>97 Kg</option>
                    <option value=98>98 Kg</option>
                    <option value=99>99 Kg</option>
                    <option value=100>100 Kg</option>
                    <option value=101>101 Kg</option>
                    <option value=102>102 Kg</option>
                    <option value=103>103 Kg</option>
                    <option value=104>104 Kg</option>
                    <option value=105>105 Kg</option>
                    <option value=106>106 Kg</option>
                    <option value=107>107 Kg</option>
                    <option value=108>108 Kg</option>
                    <option value=109>109 Kg</option>
                    <option value=110>110 Kg</option>
                    <option value=111>111 Kg</option>
                    <option value=112>112 Kg</option>
                    <option value=113>113 Kg</option>
                    <option value=114>114 Kg</option>
                    <option value=115>115 Kg</option>
                    <option value=116>116 Kg</option>
                    <option value=117>117 Kg</option>
                    <option value=118>118 Kg</option>
                    <option value=119>119 Kg</option>
                    <option value=120>120 Kg</option>
                    <option value=121>121 Kg</option>
                    <option value=122>122 Kg</option>
                    <option value=123>123 Kg</option>
                    <option value=124>124 Kg</option>
                    <option value=125>125 Kg</option>
                    <option value=126>126 Kg</option>
                    <option value=127>127 Kg</option>
                    <option value=128>128 Kg</option>
                    <option value=129>129 Kg</option>
                    <option value=130>130 Kg</option>
                    <option value=131>131 Kg</option>
                    <option value=132>132 Kg</option>
                    <option value=133>133 Kg</option>
                    <option value=134>134 Kg</option>
                    <option value=135>135 Kg</option>
                    <option value=136>136 Kg</option>
                    <option value=137>137 Kg</option>
                    <option value=138>138 Kg</option>
                    <option value=139>139 Kg</option>
                    <option value=140>140 Kg</option>
                    <option value=141>141 Kg</option>
                    <option value=142>142 Kg</option>
                    <option value=143>143 Kg</option>
                    <option value=144>144 Kg</option>
                    <option value=145>145 Kg</option>
                    <option value=146>146 Kg</option>
                    <option value=147>147 Kg</option>
                    <option value=148>148 Kg</option>
                    <option value=149>149 Kg</option>
                    <option value=150>150 Kg</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Target Weight *</label>
                <select name="tweight" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=30>30 Kg</option>
                    <option value=31>31 Kg</option>
                    <option value=32>32 Kg</option>
                    <option value=33>33 Kg</option>
                    <option value=34>34 Kg</option>
                    <option value=35>35 Kg</option>
                    <option value=36>36 Kg</option>
                    <option value=37>37 Kg</option>
                    <option value=38>38 Kg</option>
                    <option value=39>39 Kg</option>
                    <option value=40>40 Kg</option>
                    <option value=41>41 Kg</option>
                    <option value=42>42 Kg</option>
                    <option value=43>43 Kg</option>
                    <option value=44>44 Kg</option>
                    <option value=45>45 Kg</option>
                    <option value=46>46 Kg</option>
                    <option value=47>47 Kg</option>
                    <option value=48>48 Kg</option>
                    <option value=49>49 Kg</option>
                    <option value=50>50 Kg</option>
                    <option value=51>51 Kg</option>
                    <option value=52>52 Kg</option>
                    <option value=53>53 Kg</option>
                    <option value=54>54 Kg</option>
                    <option value=55>55 Kg</option>
                    <option value=56>56 Kg</option>
                    <option value=57>57 Kg</option>
                    <option value=58>58 Kg</option>
                    <option value=59>59 Kg</option>
                    <option value=60>60 Kg</option>
                    <option value=61>61 Kg</option>
                    <option value=62>62 Kg</option>
                    <option value=63>63 Kg</option>
                    <option value=64>64 Kg</option>
                    <option value=65>65 Kg</option>
                    <option value=66>66 Kg</option>
                    <option value=67>67 Kg</option>
                    <option value=68>68 Kg</option>
                    <option value=69>69 Kg</option>
                    <option value=70>70 Kg</option>
                    <option value=71>71 Kg</option>
                    <option value=72>72 Kg</option>
                    <option value=73>73 Kg</option>
                    <option value=74>74 Kg</option>
                    <option value=75>75 Kg</option>
                    <option value=76>76 Kg</option>
                    <option value=77>77 Kg</option>
                    <option value=78>78 Kg</option>
                    <option value=79>79 Kg</option>
                    <option value=80>80 Kg</option>
                    <option value=81>81 Kg</option>
                    <option value=82>82 Kg</option>
                    <option value=83>83 Kg</option>
                    <option value=84>84 Kg</option>
                    <option value=85>85 Kg</option>
                    <option value=86>86 Kg</option>
                    <option value=87>87 Kg</option>
                    <option value=88>88 Kg</option>
                    <option value=89>89 Kg</option>
                    <option value=90>90 Kg</option>
                    <option value=91>91 Kg</option>
                    <option value=92>92 Kg</option>
                    <option value=93>93 Kg</option>
                    <option value=94>94 Kg</option>
                    <option value=95>95 Kg</option>
                    <option value=96>96 Kg</option>
                    <option value=97>97 Kg</option>
                    <option value=98>98 Kg</option>
                    <option value=99>99 Kg</option>
                    <option value=100>100 Kg</option>
                    <option value=101>101 Kg</option>
                    <option value=102>102 Kg</option>
                    <option value=103>103 Kg</option>
                    <option value=104>104 Kg</option>
                    <option value=105>105 Kg</option>
                    <option value=106>106 Kg</option>
                    <option value=107>107 Kg</option>
                    <option value=108>108 Kg</option>
                    <option value=109>109 Kg</option>
                    <option value=110>110 Kg</option>
                    <option value=111>111 Kg</option>
                    <option value=112>112 Kg</option>
                    <option value=113>113 Kg</option>
                    <option value=114>114 Kg</option>
                    <option value=115>115 Kg</option>
                    <option value=116>116 Kg</option>
                    <option value=117>117 Kg</option>
                    <option value=118>118 Kg</option>
                    <option value=119>119 Kg</option>
                    <option value=120>120 Kg</option>
                    <option value=121>121 Kg</option>
                    <option value=122>122 Kg</option>
                    <option value=123>123 Kg</option>
                    <option value=124>124 Kg</option>
                    <option value=125>125 Kg</option>
                    <option value=126>126 Kg</option>
                    <option value=127>127 Kg</option>
                    <option value=128>128 Kg</option>
                    <option value=129>129 Kg</option>
                    <option value=130>130 Kg</option>
                    <option value=131>131 Kg</option>
                    <option value=132>132 Kg</option>
                    <option value=133>133 Kg</option>
                    <option value=134>134 Kg</option>
                    <option value=135>135 Kg</option>
                    <option value=136>136 Kg</option>
                    <option value=137>137 Kg</option>
                    <option value=138>138 Kg</option>
                    <option value=139>139 Kg</option>
                    <option value=140>140 Kg</option>
                    <option value=141>141 Kg</option>
                    <option value=142>142 Kg</option>
                    <option value=143>143 Kg</option>
                    <option value=144>144 Kg</option>
                    <option value=145>145 Kg</option>
                    <option value=146>146 Kg</option>
                    <option value=147>147 Kg</option>
                    <option value=148>148 Kg</option>
                    <option value=149>149 Kg</option>
                    <option value=150>150 Kg</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="input-group-text" class="form-label">Age *</label>
                <select name="age" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=15>15 Years</option>
                    <option value=16>16 Years</option>
                    <option value=17>17 Years</option>
                    <option value=18>18 Years</option>
                    <option value=19>19 Years</option>
                    <option value=20>20 Years</option>
                    <option value=21>21 Years</option>
                    <option value=22>22 Years</option>
                    <option value=23>23 Years</option>
                    <option value=24>24 Years</option>
                    <option value=25>25 Years</option>
                    <option value=26>26 Years</option>
                    <option value=27>27 Years</option>
                    <option value=28>28 Years</option>
                    <option value=29>29 Years</option>
                    <option value=30>30 Years</option>
                    <option value=31>31 Years</option>
                    <option value=32>32 Years</option>
                    <option value=33>33 Years</option>
                    <option value=34>34 Years</option>
                    <option value=35>35 Years</option>
                    <option value=36>36 Years</option>
                    <option value=37>37 Years</option>
                    <option value=38>38 Years</option>
                    <option value=39>39 Years</option>
                    <option value=40>40 Years</option>
                    <option value=41>41 Years</option>
                    <option value=42>42 Years</option>
                    <option value=43>43 Years</option>
                    <option value=44>44 Years</option>
                    <option value=45>45 Years</option>
                    <option value=46>46 Years</option>
                    <option value=47>47 Years</option>
                    <option value=48>48 Years</option>
                    <option value=49>49 Years</option>
                    <option value=50>50 Years</option>
                    <option value=51>51 Years</option>
                    <option value=52>52 Years</option>
                    <option value=53>53 Years</option>
                    <option value=54>54 Years</option>
                    <option value=55>55 Years</option>
                    <option value=56>56 Years</option>
                    <option value=57>57 Years</option>
                    <option value=58>58 Years</option>
                    <option value=59>59 Years</option>
                    <option value=60>60 Years</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Right Thigh *</label>
                <select name="rthigh" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Left Thigh *</label>
                <select name="lthigh" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Waist Above Belly Button *</label>
                <select name="waistabove" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                    <option value=81>81 cms</option>
                    <option value=82>82 cms</option>
                    <option value=83>83 cms</option>
                    <option value=84>84 cms</option>
                    <option value=85>85 cms</option>
                    <option value=86>86 cms</option>
                    <option value=87>87 cms</option>
                    <option value=88>88 cms</option>
                    <option value=89>89 cms</option>
                    <option value=90>90 cms</option>
                    <option value=91>91 cms</option>
                    <option value=92>92 cms</option>
                    <option value=93>93 cms</option>
                    <option value=94>94 cms</option>
                    <option value=95>95 cms</option>
                    <option value=96>96 cms</option>
                    <option value=97>97 cms</option>
                    <option value=98>98 cms</option>
                    <option value=99>99 cms</option>
                    <option value=100>100 cms</option>
                    <option value=101>101 cms</option>
                    <option value=102>102 cms</option>
                    <option value=103>103 cms</option>
                    <option value=104>104 cms</option>
                    <option value=105>105 cms</option>
                    <option value=106>106 cms</option>
                    <option value=107>107 cms</option>
                    <option value=108>108 cms</option>
                    <option value=109>109 cms</option>
                    <option value=110>110 cms</option>
                    <option value=111>111 cms</option>
                    <option value=112>112 cms</option>
                    <option value=113>113 cms</option>
                    <option value=114>114 cms</option>
                    <option value=115>115 cms</option>
                    <option value=116>116 cms</option>
                    <option value=117>117 cms</option>
                    <option value=118>118 cms</option>
                    <option value=119>119 cms</option>
                    <option value=120>120 cms</option>
                    <option value=121>121 cms</option>
                    <option value=122>122 cms</option>
                    <option value=123>123 cms</option>
                    <option value=124>124 cms</option>
                    <option value=125>125 cms</option>
                    <option value=126>126 cms</option>
                    <option value=127>127 cms</option>
                    <option value=128>128 cms</option>
                    <option value=129>129 cms</option>
                    <option value=130>130 cms</option>
                    <option value=131>131 cms</option>
                    <option value=132>132 cms</option>
                    <option value=133>133 cms</option>
                    <option value=134>134 cms</option>
                    <option value=135>135 cms</option>
                    <option value=136>136 cms</option>
                    <option value=137>137 cms</option>
                    <option value=138>138 cms</option>
                    <option value=139>139 cms</option>
                    <option value=140>140 cms</option>
                    <option value=141>141 cms</option>
                    <option value=142>142 cms</option>
                    <option value=143>143 cms</option>
                    <option value=144>144 cms</option>
                    <option value=145>145 cms</option>
                    <option value=146>146 cms</option>
                    <option value=147>147 cms</option>
                    <option value=148>148 cms</option>
                    <option value=149>149 cms</option>
                    <option value=150>150 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Belly Button *</label>
                <select name="bb" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                    <option value=81>81 cms</option>
                    <option value=82>82 cms</option>
                    <option value=83>83 cms</option>
                    <option value=84>84 cms</option>
                    <option value=85>85 cms</option>
                    <option value=86>86 cms</option>
                    <option value=87>87 cms</option>
                    <option value=88>88 cms</option>
                    <option value=89>89 cms</option>
                    <option value=90>90 cms</option>
                    <option value=91>91 cms</option>
                    <option value=92>92 cms</option>
                    <option value=93>93 cms</option>
                    <option value=94>94 cms</option>
                    <option value=95>95 cms</option>
                    <option value=96>96 cms</option>
                    <option value=97>97 cms</option>
                    <option value=98>98 cms</option>
                    <option value=99>99 cms</option>
                    <option value=100>100 cms</option>
                    <option value=101>101 cms</option>
                    <option value=102>102 cms</option>
                    <option value=103>103 cms</option>
                    <option value=104>104 cms</option>
                    <option value=105>105 cms</option>
                    <option value=106>106 cms</option>
                    <option value=107>107 cms</option>
                    <option value=108>108 cms</option>
                    <option value=109>109 cms</option>
                    <option value=110>110 cms</option>
                    <option value=111>111 cms</option>
                    <option value=112>112 cms</option>
                    <option value=113>113 cms</option>
                    <option value=114>114 cms</option>
                    <option value=115>115 cms</option>
                    <option value=116>116 cms</option>
                    <option value=117>117 cms</option>
                    <option value=118>118 cms</option>
                    <option value=119>119 cms</option>
                    <option value=120>120 cms</option>
                    <option value=121>121 cms</option>
                    <option value=122>122 cms</option>
                    <option value=123>123 cms</option>
                    <option value=124>124 cms</option>
                    <option value=125>125 cms</option>
                    <option value=126>126 cms</option>
                    <option value=127>127 cms</option>
                    <option value=128>128 cms</option>
                    <option value=129>129 cms</option>
                    <option value=130>130 cms</option>
                    <option value=131>131 cms</option>
                    <option value=132>132 cms</option>
                    <option value=133>133 cms</option>
                    <option value=134>134 cms</option>
                    <option value=135>135 cms</option>
                    <option value=136>136 cms</option>
                    <option value=137>137 cms</option>
                    <option value=138>138 cms</option>
                    <option value=139>139 cms</option>
                    <option value=140>140 cms</option>
                    <option value=141>141 cms</option>
                    <option value=142>142 cms</option>
                    <option value=143>143 cms</option>
                    <option value=144>144 cms</option>
                    <option value=145>145 cms</option>
                    <option value=146>146 cms</option>
                    <option value=147>147 cms</option>
                    <option value=148>148 cms</option>
                    <option value=149>149 cms</option>
                    <option value=150>150 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">calves *</label>
                <select name="calves" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=10>10 cms</option>
                    <option value=11>11 cms</option>
                    <option value=12>12 cms</option>
                    <option value=13>13 cms</option>
                    <option value=14>14 cms</option>
                    <option value=15>15 cms</option>
                    <option value=16>16 cms</option>
                    <option value=17>17 cms</option>
                    <option value=18>18 cms</option>
                    <option value=19>19 cms</option>
                    <option value=20>20 cms</option>
                    <option value=21>21 cms</option>
                    <option value=22>22 cms</option>
                    <option value=23>23 cms</option>
                    <option value=24>24 cms</option>
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">Hips *</label>
                <select name="hips" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                    <option value=81>81 cms</option>
                    <option value=82>82 cms</option>
                    <option value=83>83 cms</option>
                    <option value=84>84 cms</option>
                    <option value=85>85 cms</option>
                    <option value=86>86 cms</option>
                    <option value=87>87 cms</option>
                    <option value=88>88 cms</option>
                    <option value=89>89 cms</option>
                    <option value=90>90 cms</option>
                    <option value=91>91 cms</option>
                    <option value=92>92 cms</option>
                    <option value=93>93 cms</option>
                    <option value=94>94 cms</option>
                    <option value=95>95 cms</option>
                    <option value=96>96 cms</option>
                    <option value=97>97 cms</option>
                    <option value=98>98 cms</option>
                    <option value=99>99 cms</option>
                    <option value=100>100 cms</option>
                    <option value=101>101 cms</option>
                    <option value=102>102 cms</option>
                    <option value=103>103 cms</option>
                    <option value=104>104 cms</option>
                    <option value=105>105 cms</option>
                    <option value=106>106 cms</option>
                    <option value=107>107 cms</option>
                    <option value=108>108 cms</option>
                    <option value=109>109 cms</option>
                    <option value=110>110 cms</option>
                    <option value=111>111 cms</option>
                    <option value=112>112 cms</option>
                    <option value=113>113 cms</option>
                    <option value=114>114 cms</option>
                    <option value=115>115 cms</option>
                    <option value=116>116 cms</option>
                    <option value=117>117 cms</option>
                    <option value=118>118 cms</option>
                    <option value=119>119 cms</option>
                    <option value=120>120 cms</option>
                    <option value=121>121 cms</option>
                    <option value=122>122 cms</option>
                    <option value=123>123 cms</option>
                    <option value=124>124 cms</option>
                    <option value=125>125 cms</option>
                    <option value=126>126 cms</option>
                    <option value=127>127 cms</option>
                    <option value=128>128 cms</option>
                    <option value=129>129 cms</option>
                    <option value=130>130 cms</option>
                    <option value=131>131 cms</option>
                    <option value=132>132 cms</option>
                    <option value=133>133 cms</option>
                    <option value=134>134 cms</option>
                    <option value=135>135 cms</option>
                    <option value=136>136 cms</option>
                    <option value=137>137 cms</option>
                    <option value=138>138 cms</option>
                    <option value=139>139 cms</option>
                    <option value=140>140 cms</option>
                    <option value=141>141 cms</option>
                    <option value=142>142 cms</option>
                    <option value=143>143 cms</option>
                    <option value=144>144 cms</option>
                    <option value=145>145 cms</option>
                    <option value=146>146 cms</option>
                    <option value=147>147 cms</option>
                    <option value=148>148 cms</option>
                    <option value=149>149 cms</option>
                    <option value=150>150 cms</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label">chest *</label>
                <select name="chest" required="required" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value=25>25 cms</option>
                    <option value=26>26 cms</option>
                    <option value=27>27 cms</option>
                    <option value=28>28 cms</option>
                    <option value=29>29 cms</option>
                    <option value=30>30 cms</option>
                    <option value=31>31 cms</option>
                    <option value=32>32 cms</option>
                    <option value=33>33 cms</option>
                    <option value=34>34 cms</option>
                    <option value=35>35 cms</option>
                    <option value=36>36 cms</option>
                    <option value=37>37 cms</option>
                    <option value=38>38 cms</option>
                    <option value=39>39 cms</option>
                    <option value=40>40 cms</option>
                    <option value=41>41 cms</option>
                    <option value=42>42 cms</option>
                    <option value=43>43 cms</option>
                    <option value=44>44 cms</option>
                    <option value=45>45 cms</option>
                    <option value=46>46 cms</option>
                    <option value=47>47 cms</option>
                    <option value=48>48 cms</option>
                    <option value=49>49 cms</option>
                    <option value=50>50 cms</option>
                    <option value=51>51 cms</option>
                    <option value=52>52 cms</option>
                    <option value=53>53 cms</option>
                    <option value=54>54 cms</option>
                    <option value=55>55 cms</option>
                    <option value=56>56 cms</option>
                    <option value=57>57 cms</option>
                    <option value=58>58 cms</option>
                    <option value=59>59 cms</option>
                    <option value=60>60 cms</option>
                    <option value=61>61 cms</option>
                    <option value=62>62 cms</option>
                    <option value=63>63 cms</option>
                    <option value=64>64 cms</option>
                    <option value=65>65 cms</option>
                    <option value=66>66 cms</option>
                    <option value=67>67 cms</option>
                    <option value=68>68 cms</option>
                    <option value=69>69 cms</option>
                    <option value=70>70 cms</option>
                    <option value=71>71 cms</option>
                    <option value=72>72 cms</option>
                    <option value=73>73 cms</option>
                    <option value=74>74 cms</option>
                    <option value=75>75 cms</option>
                    <option value=76>76 cms</option>
                    <option value=77>77 cms</option>
                    <option value=78>78 cms</option>
                    <option value=79>79 cms</option>
                    <option value=80>80 cms</option>
                    <option value=81>81 cms</option>
                    <option value=82>82 cms</option>
                    <option value=83>83 cms</option>
                    <option value=84>84 cms</option>
                    <option value=85>85 cms</option>
                    <option value=86>86 cms</option>
                    <option value=87>87 cms</option>
                    <option value=88>88 cms</option>
                    <option value=89>89 cms</option>
                    <option value=90>90 cms</option>
                    <option value=91>91 cms</option>
                    <option value=92>92 cms</option>
                    <option value=93>93 cms</option>
                    <option value=94>94 cms</option>
                    <option value=95>95 cms</option>
                    <option value=96>96 cms</option>
                    <option value=97>97 cms</option>
                    <option value=98>98 cms</option>
                    <option value=99>99 cms</option>
                    <option value=100>100 cms</option>
                    <option value=101>101 cms</option>
                    <option value=102>102 cms</option>
                    <option value=103>103 cms</option>
                    <option value=104>104 cms</option>
                    <option value=105>105 cms</option>
                    <option value=106>106 cms</option>
                    <option value=107>107 cms</option>
                    <option value=108>108 cms</option>
                    <option value=109>109 cms</option>
                    <option value=110>110 cms</option>
                    <option value=111>111 cms</option>
                    <option value=112>112 cms</option>
                    <option value=113>113 cms</option>
                    <option value=114>114 cms</option>
                    <option value=115>115 cms</option>
                    <option value=116>116 cms</option>
                    <option value=117>117 cms</option>
                    <option value=118>118 cms</option>
                    <option value=119>119 cms</option>
                    <option value=120>120 cms</option>
                    <option value=121>121 cms</option>
                    <option value=122>122 cms</option>
                    <option value=123>123 cms</option>
                    <option value=124>124 cms</option>
                    <option value=125>125 cms</option>
                    <option value=126>126 cms</option>
                    <option value=127>127 cms</option>
                    <option value=128>128 cms</option>
                    <option value=129>129 cms</option>
                    <option value=130>130 cms</option>
                    <option value=131>131 cms</option>
                    <option value=132>132 cms</option>
                    <option value=133>133 cms</option>
                    <option value=134>134 cms</option>
                    <option value=135>135 cms</option>
                    <option value=136>136 cms</option>
                    <option value=137>137 cms</option>
                    <option value=138>138 cms</option>
                    <option value=139>139 cms</option>
                    <option value=140>140 cms</option>
                    <option value=141>141 cms</option>
                    <option value=142>142 cms</option>
                    <option value=143>143 cms</option>
                    <option value=144>144 cms</option>
                    <option value=145>145 cms</option>
                    <option value=146>146 cms</option>
                    <option value=147>147 cms</option>
                    <option value=148>148 cms</option>
                    <option value=149>149 cms</option>
                    <option value=150>150 cms</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</body>

</html>




<?php
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}
?>