<?php
session_start ();
if (!isset($_SESSION['UN']))
{
    header("location:login.php");
    exit;
}
?>
<html>
    <head>
        <title>
            vaccine status
        </title>
        <style>
            html
{
    background: linear-gradient(#141e30, #243b55);
    height:100%
}
table
{
    margin-top:1.25%;
    margin-left:22% ;
    text-align: center;
    font-size: large;
    border: 1px solid;
    border-radius:15px;
    background-color:white;
    padding:2%;
}
td
{
    padding: 1.4%;
}
a,a:visited
{
    text-decoration: none;
}
        </style>
    </head>
    <body>
        <table>
            <tr>
            <th>
            O (at birth)
            </th>
            <td>
                <input type="checkbox" name="1" id="">
                BOG, OPVO, HBVO* BCG, OPVO, HBV1
                </input>
            </td>
            </tr>
            
            <tr>
            <th>
            6 weeks
            </th>
            <td>
                <input type="checkbox" name="1" id="">
                DTwP1, OPV1,
                DwP1, IPV1, HBV2, h..
                HBV1*, HiB1*
                Rotavirus 1, PCV1    
            </input>
            </td>
            </tr>
            
            <tr>
            <th>
            10 weeks
            </th>
            <td>
                <input type="checkbox" name="1" id="">
                DTwP2, OPV2,
                DTwP2, IPV2, HiB2,
                HBV2*. HiB2*
                Rotavirus 2, PCV2   
            </input>
            </td>
            </tr>
            
            <tr>
            <th>
            14 weeks
            </th>
            <td>
                <input type="checkbox" name="1" id="">               
                DTwP3, OPV3,
                DwP3, IPV3, HiB3,
                HBV3*, HiB3*
                Rotavirus 3, PCV3   
            </input>
            </td>
            </tr>
            
            <tr>
            <th>
            6 months            </th>
            <td>
                <input type="checkbox" name="1" id="">               
                OPV1, HBV3  
            </input>
            </td>
            </tr>          
            <tr>
            <th>
            9 months
            </th>
            <td>
                <input type="checkbox" name="1" id="">               
                Measies, Vitamin A OPV2, MMR1 (9-12 months)typhoid conjugate vaccine
            </input>
            </td>
            </tr>
            <tr>
            <th>
            12 months
            </th>
            <td>
                <input type="checkbox" name="1" id="">               
                HAV1            </input>
            </td>
            </tr>
            <tr>
            <th>
            15 months
                    </th>
            <td>
                <input type="checkbox" name="1" id="">               
                MMR*,MMR2, varicella 1, FUv booster 
           </input>
            </td>
            </tr>
            <tr>
            <th>
            16-24 months 
        </th>
            <td>
                <input type="checkbox" name="1" id="">               
                DTwP B1, OPV B1           </input>
            </td>
            </tr>
            <tr>
            <th>
            16-18 months
        </th>
            <td>
                <input type="checkbox" name="1" id="">               
                DTwP B1/DaP           </input>
            </td>
            </tr>
            <tr>
            <th>
                2 years
            </th>
            <td>
        <input type="checkbox" name="1" id="">
        Typhoid booster  
        </input>
    </td>
</tr>

<tr>
    <th>
        5 years
    </th>
    <td>
        <input type="checkbox" name="1" id="">
         DTwP B2   
        </input>
    </td>
</tr>


<tr>
    <th>
        4-6 years
    </th>
    <td>
        <input type="checkbox" name="1" id="">
         DTwP B2/DTaP B2, OPV3, varicella 2, typhoid booster   
        </input>
    </td>
</tr>
<tr>
    <th>
        10 years
    </th>
    <td>
        <input type="checkbox" name="1" id="">
            TT   
        </input>
    </td>
</tr>
<tr>
    <th>
        16 years
    </th>
    <td>
        <input type="checkbox" name="1" id="">
            TT   
        </input>
    </td>
</tr>
<tr>
    <td>
    </td>
    <td>
        <a href="submit.php">Submit</a>
    </td>
</tr>
            </table>

    </body>
</html>