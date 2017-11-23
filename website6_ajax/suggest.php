<!-- to do database -->

<?php
$people = array(
'Allison',
'Arthur',
'Ana',
'Alex',
'Arlene',
'Alberto',
'Barry',
'Bertha',
'Bill',
'Bonnie',
'Bret',
'Beryl',
'Chantal',
'Cristobal',
'Claudette',
'Charley',
'Cindy',
'Chris',
'Dean',
'Dolly',
'Danny',
'Danielle',
'Dennis',
'Debby',
'Erin',
'Edouard',
'Erika',
'Earl',
'Emily',
'Ernesto',
'Felix',
'Fay',
'Fabian',
'Frances',
'Franklin',
'Florence',
'Gabielle',
'Gustav',
'Grace',
'Gaston',
'Gert',
'Gordon',
'Humberto',
'Hanna',
'Henri',
'Hermine',
'Harvey',
'Helene',
'Iris',
'Isidore',
'Isabel',
'Ivan',
'Irene',
'Isaac',
'Jerry',
'Josephine',
'Juan',
'Jeanne',
'Jose',
'Joyce',
'Karen',
'Kyle',
'Kate',
'Karl',
'Katrina',
'Kirk',
'Lorenzo',
'Lili',
'Larry',
'Lisa',
'Lee',
'Leslie',
'Michelle',
'Marco',
'Mindy',
'Maria',
'Michael',
'Noel',
'Nana',
'Nicholas',
'Nicole',
'Nate',
'Nadine',
'Olga',
'Omar',
'Odette',
'Otto',
'Ophelia',
'Oscar',
'Pablo',
'Paloma',
'Peter',
'Paula',
'Philippe',
'Patty',
'Rebekah',
'Rene',
'Rose',
'Richard',
'Rita',
'Rafael',
'Sebastien',
'Sally',
'Sam',
'Shary',
'Stan',
'Sandy',
'Tanya',
'Teddy',
'Teresa',
'Tomas',
'Tammy',
'Tony',
'Van',
'Vicky',
'Victor',
'Virginie',
'Vince',
'Valerie',
'Wendy',
'Wilfred',
'Wanda',
'Walter',
'Wilma',
'William',
'Kumiko',
'Aki',
'Miharu',
'Chiaki',
'Michiyo',
'Itoe',
'Nanaho',
'Reina',
'Emi',
'Yumi',
'Ayumi',
'Kaori',
'Sayuri',
'Rie',
'Miyuki',
'Hitomi',
'Naoko',
'Miwa',
'Etsuko',
'Akane',
'Kazuko',
'Miyako',
'Youko',
'Sachiko',
'Mieko',
'Toshie',
'Junko');


// catch the query string / get query string
$q = $_REQUEST['q'];
$suggestion = "";

// get suggestions
if($q !== ""){
  // make everything lower case
  $q = strtolower($q);
  // length
  $len = strlen($q);

  // loop throught array

  foreach($people as $person){

    // find first occurance | return part of string
    if(stristr($q, substr($person, 0, $len))){
      //
      if($suggestion === ""){
        $suggestion = $person;
      } else {
        $suggestion .= ", {$person}";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>