
pArray = new Array();
pArray[0] = "Two wrongs don't make a right";
pArray[1] = "Fortune favors the bold";
pArray[2] = "Better late than never";
pArray[3] = "The early bird catches the worm";
pArray[4] = "You can't make an omelet without breaking a few eggs";
pArray[5] = "God helps those who help themselves";
pArray[6] = "Actions speak louder than words";
pArray[7] = "Easy come, easy go";
pArray[8] = "Beauty is in the eye of the beholder";
pArray[9] = "Good things come to those who wait";
pArray[10] = "Don't put all your eggs in one basket";
pArray[11] = "You can't judge a book by its cover";
pArray[12] = "Necessity is the mother of invention";
pArray[13] = "There's no time like the present";
pArray[14] = "All good things must come to an end";
pArray[15] = "Don't bite the hand that feeds you";
pArray[16] = "One man's trash is another man's treasure";
pArray[17] = "The grass is always greener on the other side of the hill";
pArray[18] = "Do unto others as you would have them do unto you";
pArray[19] = "A chain is only as strong as its weakest link";
var l ;
var x ;
var g ;
var t;
var gd;
var button;
var done;
var score=0 ;
proverb = new array();

// generate function is picking one proverb
function generate()
{
	random = Math.floor ( Math.random() * pArray.length );
	proverb=pArray[random];
	t = document.getElementById("mytable");
	gd = document.getElementById("myguess");
	button = document.getElementById("guessbutton");
	done = document.getElementById("imdone");
	var n="";
	var ignore=0;
	var word = proverb.split(" ");
	var wordlist=0;
	var letterlist=0;
	x = 0;
	l = 0;
	g= 0;
	done.onclick = donerespond;
	set(verify, "Make a smart guess");	
	gd.parentNode.style.display = "none";	
	done.style.visibility = "visible";

	for(var i=0; i<t.rows.length; i++)
	{
	var row = t.rows[i];
		
	for(var j=0; j<row.cells.length; j++)
		{
		if (ignore > 0)
		{
				n = "&nbsp;";
				ignore--;
		}
			
		else if (wordlist < word.length && letterlist < word[wordlist].length)
			{
				n = word[wordlist].charAt(letterlist++);
				l++;
			}
			
			else
			{
				n = "&nbsp;";
				wordlist++;
				letterlist=0;
				
				if (wordlist < word.length && word[wordlist].length >= row.cells.length - row.cells[j].cellIndex)
				{
					ignore = row.cells.length - row.cells[j].cellIndex;
				}
			}
			
			row.cells[j].firstChild.innerHTML = n;
			if (n == "&nbsp;")
			{
				
				row.cells[j].className = "empty";
			}
			else
			{
				row.cells[j].className = "full";
				row.cells[j].firstChild.style.visibility = "hidden";
			}
		}
	}
}

// to flip the cell
function flip(cell)
{
	if (x >= l/2 || cell.innerHTML == "&nbsp;")   
	{
		return;
	}
	
	var span = cell.firstChild;
	
	span.style.visibility = "visible";
	x++; 
	
	if (x >= l/2)
	{
		alert ("You have got the limit, please pick a guess...");
		verify();
	}
}

// to make a guess and check it
function verify()
{	
	set(check,"Submit");
	gd.parentNode.style.display = "block";
	gd.value = "";
	gd.select();
	gd.focus();
	
}

// to check the guess
function check(event)
{
	var guessvalue = gd.value;
	
	if (guessvalue.replace("\n", "").replace(/\.?\s*$/, "") == proverb)
	{
		score += (l - x);
		document.getElementById("score").lastChild.innerHTML = score;
		alert("Your Score is " + (l - x) + "Star");
		showresult();
	}
	else if (++g >= 3)
	{
		alert("That was wrong again,see the correct proverb now");
		showresult();
	}
	else
	{
		alert("Wrong guess. Try it again..!!!");
	}
}

// to show the answer
function showresult()
{
	for(var i=0; i<t.rows.length; i++)
	{
		for(var j=0; j<t.rows[i].cells.length; j++)
		{
			var cell = t.rows[i].cells[j];
			cell.firstChild.style.visibility = "visible";
		}
	}
	
	gd.parentNode.style.display = "none";
			
	set(generate, "Start over");
	
	done.style.visibility = "hidden";
	
	document.getElementById("score").lastChild.innerHTML = score;
}

// when you can't answer
function donerespond()
{
	score = 0;
	showresult();
}

function set(func, text)
{
	button.value = text;
	button.onclick = func;
}



