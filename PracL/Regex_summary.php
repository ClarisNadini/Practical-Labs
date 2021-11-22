<!--Sight(https://regexr.com/)-->
<!--Test search to get certain piece of the text that would
allow advnance find and replace, do info validation,
info matching and things like that
Format- starts and ends with forwad slash with a regular flag at the end
/.../g - global flag (allows you to match anywhere in the string-all/multiple matches - when turned off, the first output will be indicated as default)

Global g on(multiple matches) vs g off()
case Insensitive i (case sensitive for the words being searched)

COUNTING & SPECIAL XTER SELECTORS
a+ match one or more
a+b? or ab? Match one or more of the particular letter and anything beofre the ? is optional, doesnt have to be satisfied
ab* for the xter next to it, it match zero or more
.ab matches anything at all that has ab(takes all words that have ab anywhere) 
\. slash makes it ignore anything before the period xter in the aim of findng all period xters 
.\. takes the letter immediately before the period
\w or \S match any word xter
\s or \W match any spacing
\w{3,5} match any word with min of 3 xters and max of 5 xters
e{2,3} match the xter e when its double or tripple
re{2,3} r is seperate from e
(re){2,3} match xter re where they apear together two to three times

XTER GROUPING
[fc]at matches any word strting with f/c and ending with at
[a-z]at matches any word starting with any xter btw a to z but ends with at
[a-zA-Z]at ...lowercae and uppercse
(t|T)he match lower or upper case t 
^T/g matches beginning ot the first line
^T/gm matches beginning of multiple lines
\.$ matches the end of the whole statement, multiple line has to be enabled for it to take others

LOOK BEHIND
+ve Look Behind - syntax -  /(?<=)/g
(?<=[tT]he). matches first xter that is followed by the word 'the'
-veLook Behind 
(?<![tT]he) matches all xters that dont have the word the or The before them

LOOK AHEAD
+ve Look Ahead
.(?=at) finds any xter thats followed by xters at
.(?!at) finds xter that is notfollowed by the string at

NB: Two or more can be comined & Spacing is a xter,
    \-(special xter)
    ?-optional ?
    () - grouping
    ?: - used in a to not not check for something and its put infront of that group (making it a non capturing group)


EXAMPLE - Check for phone no 1234567890, 123-456-7890, 123 456 7890, (123) 456-789, +1 123 456 7890
/\d{10}/g   Checking for 9 xters in a row without any other xters
/\d{3}-?\d{3}-?\d{4}/gm with - and non space
/\d{3}[ -]?\d{3}[ -]?\d{4}/gm with space, non space/xter and - (all of the above)
/...\(?...(?<name1>\d{3})...\)?...[ -](?<name2>\d{3})[ -]?(?<name3>\d{4})/gm
/...(\(+1)[ -])?...\(?(?<name1>\d{3})[ -]?(?<name2>\d{3})[ -]?(?<name3>\d{4})/gm
  

Using capture groups to take the needed values/xters capture uses ()
/(\d{3})[ -]?(\d{3})[ -]?(\d{4})/gm matches those groupings, the bracketed
$1$2$3 combines all those groupings

To do the above with namings for the group
/(...?<name1>...\d{3})[ -](...?<name2>...\d{3})[ -]?(...?<name3>...\d{4})/gm matches those groupings, the bracketed
??? combines all those groupings
-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

</body>

</html>