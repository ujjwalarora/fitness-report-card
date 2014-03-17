<?php

/*******************************************************
the grouping are on the basis of

* age - teen(13-20) , adult(20-40) , middle-age(40 above) 
* sex - male , female
* student , working

the categories are :

1-- male, teen, student
2-- female, teen, student
3-- male, adult, working/business
4-- female, adult, working/business
5-- male, middle-age, working
6-- female, middle-aged, working 

I have made the following assumptions :

1- everyone in his/her teen is a student.
2- everyone above ~20 starts working ( there's not proper way in facebook to get to know if person is employed or not, so this assumption is suitable)

********************************************************/

//teenager
if( $age<=20 )
{
	if( $gender=="male" )
	{
		$content = "&#8226; You have extraordinary skills within you \n yet to be discovered! \n&#8226; Your concentration while studying and \n memory power needs to be improved. \n&#8226; Your sitting infront of computer is very \n much, so you need to take care of \n your eyes.";
		$dialog_message="Want help to improve memory and concentration <br> naturally ?";
	}
	else if ( $gender=="female")
	{
		$content = "&#8226; Your mental and emotional health is \n excellent. \n&#8226; You are not able to concentrate for a long \n time while studying. \n&#8226; Your skin health is low and very prone \n to skin diseases.";
		$dialog_message="Want help on improving the glow on <br> your face and memory naturally ?";
	}
}

//adult
if( $age>20 && $age<=40 )
{
	if( $gender=="male")
	{
		$content = "&#8226; Your digestive power is excellent! \n&#8226; You feel depressed and stressed out at \n times. \n&#8226; Your rate of hair fall and graying is \n higher than normal.";
		$dialog_message="Need help in overcoming stress and improve <br> hair health naturally ?";
	}
	else if ( $gender=="female" )
	{
		$content = "&#8226; Your overall health is above average! \n&#8226; You feel stressed out and depressed \n at times. \n&#8226; There is alarming harmonal variations \n resulting in excess fat collection in \n your body.";
		$dialog_message="Need help to reduce weight and correct <br> Harmonal Imbalance ?";
	}
}

//middle-aged
if( $age>40 )
{
	if( $gender=="male" )
	{
		$content = "&#8226; Your digestion power is excellent. \n&#8226; You are mentally very strong and \n emotionally enduring. \n&#8226; Your spine strength is not upto th mark. \n&#8226; You have high chances of high blood \n pressure/diabetes. \n&#8226; You need more sleep.";
		$dialog_message="Want help to get natural sleep and health ?"; 
	}
	else if ( $gender=="female" )
	{
		$content = "&#8226; You are mentally very strong and \n emotionally enduring. \n&#8226; Your joins have started to become weak \n and bone health is poor. \n&#8226; There is alarming harmonal variations \n resulting in excess fat collection in \n your body.";
		$dialog_message="Need help to overcome with obesity and cure <br> cure joint problems naturally ?";
	}
}

?>