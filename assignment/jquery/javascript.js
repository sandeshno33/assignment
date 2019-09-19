function prime()
{
	var a=document.getElementById("p").value;
	if(a%2==0)
	{
		document.getElementById("b").innerHTML="Not Prime";
	}
	else
	{
		document.getElementById("b").innerHTML="Prime";
	}
}