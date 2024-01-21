<?php

/* Asociativní pole s zkratkami pro měsíc a roky. 
   V PHP je asociativní pole reprezentováno pomocí šipek (=>), které spojují klíče 
   a hodnoty.  
   Každý klíč představuje zkratku roku (např. '1948' pro 'July 1948') a je přiřazen
   k odpovídajícímu údaji o průměrné teplotě v červenci v daném roce.
   Příklad:
   - Klíč '1948' (zkratka) odpovídá údajům o průměrné teplotě v červenci 1948.
   - Klíč '1949' (zkratka) odpovídá údajům o průměrné teplotě v červenci 1949.
   Asociativní pole umožňuje snadný přístup k údajům pomocí jejich zkratky.
   To usnadňuje manipulaci s daty a uspořádání informací. */

$dateAbbreviations = [
    '1948' => 'July 1948',
    '1949' => 'July 1949',
    '1950' => 'July 1950',
    '1953' => 'July 1953',
    '1955' => 'July 1955',
    '1960' => 'July 1960',
    '1963' => 'July 1963',
    '1965' => 'July 1965',
    '1970' => 'July 1970',
    '1973' => 'July 1973',
    '1975' => 'July 1975',
    '1980' => 'July 1980',
    '1983' => 'July 1983',
    '1985' => 'July 1985',
    '1990' => 'July 1990',
    '1993' => 'July 1993',
    '1995' => 'July 1995',
    '2000' => 'July 2000',
    '2003' => 'July 2003',
    '2005' => 'July 2005',
    '2010' => 'July 2010',
    '2013' => 'July 2013',
    '2015' => 'July 2015',
    '2018' => 'July 2018',
    '2019' => 'July 2019',
    '2020' => 'July 2020',
    '2021' => 'July 2021',
    '2022' => 'July 2022',
    '2023' => 'July 2023',
    '1948' => 'December 1948',
    '1949' => 'December 1949',
    '1950' => 'December 1950',
    '1953' => 'December 1953',
    '1955' => 'December 1955',
    '1960' => 'December 1960',
    '1963' => 'December 1963',
    '1965' => 'December 1965',
    '1970' => 'December 1970',
    '1973' => 'December 1973',
    '1975' => 'December 1975',
    '1980' => 'December 1980',
    '1983' => 'December 1983',
    '1985' => 'December 1985',
    '1990' => 'December 1990',
    '1993' => 'December 1993',
    '1995' => 'December 1995',
    '2000' => 'December 2000',
    '2003' => 'December 2003',
    '2005' => 'December 2005',
    '2010' => 'December 2010',
    '2013' => 'December 2013',
    '2015' => 'December 2015',
    '2018' => 'December 2018',
    '2019' => 'December 2019',
    '2020' => 'December 2020',
    '2021' => 'December 2021',
    '2022' => 'December 2022',
    '2023' => 'December 2023',
];
/* Asociativní pole průměrných teplot pro každý rok v červenci. */
return array(
    'July 1948' => array(
        '1948' => 10.00,
    ),
    'July 1949' => array(
        '1949' => 13.00,
    ),
    'July 1950' => array(
        '1950' => 9.00,
    ),
    'July 1953' => array(
        '1953' => 12.00,
    ),
    'July 1955' => array(
        '1955' => 14.00,
    ),
    'July 1960' => array(
        '1960' => 8.00,
    ),
    'July 1963' => array(
        '1963' => 7.00,
    ),
    'July 1965' => array(
        '1965' => 5.00,
    ),
    'July 1970' => array(
        '1970' => 9.00,
    ),
    'July 1973' => array(
        '1973' => 11.00,
    ),
    'July 1975' => array(
        '1975' => 11.00,
    ),
    'July 1980' => array(
        '1980' => 11.00,
    ),
    'July 1983' => array(
        '1983' => 9.00,
    ),
    'July 1985' => array(
        '1985' => 13.00,
    ),
    'July 1990' => array(
        '1990' => 0.00,
    ),
    'July 1993' => array(
        '1993' => 0.00,
    ),
    'July 1995' => array(
        '1995' => 0.00,
    ),
    'July 2000' => array(
        '2000' => 11.00,
    ),   
    'July 2003' => array(
        '2003' => 12.00,
    ),
    'July 2005' => array(
        '2005' => 12.00,
    ),
    'July 2010' => array(
        '2010' => 13.00,
    ),
    'July 2013' => array(
        '2013' => 12.00,
    ),
    'July 2015' => array(
        '2015' => 11.00,
    ),
    'July 2018' => array(
        '2018' => 14.00,
    ),
    'July 2019' => array(
        '2019' => 15.00,
    ),
    'July 2020' => array(
        '2020' => 17.00,
    ),
    'July 2021' => array(
        '2021' => 13.00,
    ),
    'July 2022' => array(
        '2022' => 15.00,
    ),
    'July 2023' => array(
        '2023' => 15.00,
    ),

/* Asociativní pole průměrných teplot pro každý rok v prosinci. */
  
    'December 1948' => array(
        '1948' => -14.00, 
    ),
    'December 1949' => array(
        '1949' => -17.00,
    ),
    'December 1950' => array(
        '1950' => -24.00,
    ),
    'December 1953' => array(
        '1953' => -16.00,
    ),
    'December 1955' => array(
        '1955' => -19.00,
    ),
    'December 1960' => array(
        '1960' => -23.00,
    ),
    'December 1963' => array(
        '1963' => -24.00,
    ),
    'December 1965' => array(
        '1965' => -14.00,
    ),
    'December 1970' => array(
        '1970' => -19.00,
    ),
    'December 1973' => array(
        '1973' => -18.00,
    ),
    'December 1975' => array(
        '1975' => -17.00,
    ),
    'December 1980' => array(
        '1980' => -21.00,
    ),
    'December 1983' => array(
        '1983' => -28.00,
    ),
    'December 1985' => array(
        '1985' => -23.00,
    ),
    'December 1990' => array(
        '1990' => -22.00,
    ),
    'December 1993' => array(
        '1993' => -17.00,
    ),
    'December 1995' => array(
        '1995' => -21.00,
    ),
    'December 2000' => array(
        '2000' => -22.00,
    ),
    'December 2003' => array(
        '2003' => -13.00,
    ),
    'December 2005' => array(
        '2005' => -18.00,
    ),
    'December 2010' => array(
        '2010' => -14.00,
    ),
    'December 2013' => array(
        '2013' => -21.00,
    ),
    'December 2015' => array(
        '2015' => -9.00,
    ),
    'December 2018' => array(
        '2018' => -10.00,
    ),
    'December 2019' => array(
        '2019' => -14.00,
    ),
    'December 2020' => array(
        '2020' => -12.00,
    ),
    'December 2021' => array(
        '2021' => -12.00,
    ),
    'December 2022' => array(
        '2022' => -22.00,
    ),
    'December 2023' => array(
        '2023' => -8.00,
    ),
);
?>   
