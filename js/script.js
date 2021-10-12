const counsumedDrink = new Array();//initial user selected drinks array
var totalIntake=0;  //initial intake value
var totalLimit=500; //Max daily intake value

function resetcounter(){
    //function to reset count value and selected drinks array
    
    totalIntake=0;
    $("#result").html("");
    counsumedDrink.splice(0, counsumedDrink.length);
    displayTotalIntake(0); //call to set total intake display to zero
    displayTotalServing(0); //call to set total intake serving to zero
    displayRemainingIntake(totalLimit); //call to set reminging limit to Max daily intake value
}

function add2Intake(drinkName,coffeineAmt,limit){
    //function to add drink to the drink array and set counters
    var numOfTrue = 0;

    //search drink in selected list
    if (counsumedDrink.length>0){
        for(var i=0;i<counsumedDrink.length;i++){
            if(counsumedDrink[i]==drinkName){
                        numOfTrue++;
                }
        }
    }
    
    if (numOfTrue>=limit && limit>0){
        //check if it exceed limit
        alert("You can't have more than "+limit+" servings of "+drinkName+" in a day!");
    
        return false;
    }else{
        var newitem;
        if (counsumedDrink.length==0){
            newitem=0;
        }else{
            newitem=counsumedDrink.length;
        }
        if (drinkName!="" && drinkName!="Drink Name" && countTotalIntake(coffeineAmt)){
            //ok to add to list and set counter
            counsumedDrink[newitem]=drinkName; //add to array
            totalIntake=totalIntake+coffeineAmt;
            $("#total_intake").text(totalIntake); //set total intake to display
            displayTotalServing(counsumedDrink.length); //set total serving to display
            var remaining=totalLimit-totalIntake;
            displayRemainingIntake(remaining); //set reminging limit to display
            return true;
        }
    }
    return false;
}
function displayRemainingIntake(value){
    $("#remaining_intake").text(value);
}
function countTotalIntake(coffeineAmt){

    if ((totalIntake+coffeineAmt)>totalLimit){
        alert("Limit exceed, current total intake : "+totalIntake);
        return false;
    }else{
        return true;
    }
    
}
function displayTotalServing(totalserving){
    $("#total_serving").text(totalserving);
}
function displayTotalIntake(totalIntake){
    
    $("#total_intake").text(totalIntake);
}
$(document).ready(function(){
            if (jQuery) {

                $( "div .row" ).click(function(event) {

                    //item on click
                    var id = $(this).attr('id');
                    var drinkName = $(this).find(".drink_name").text();
                    var coffeineAmt = parseInt($(this).find(".coffeine_in_mg").text());
                    var intakeLimit = parseInt($(this).find(".intake_limit").text());
                    
                    
                    if (add2Intake(drinkName,coffeineAmt,intakeLimit)){
                        //if add2intake function return true, copy item to selected list
                    $(this).clone().appendTo( "#result" ).css({'background-color':'rgba(100,100,100,0.5)','color':'rgba(255,255,255,10)'});
                    }
                });
                
                $( "#reset" ).click(function(event) {
                    resetcounter();
                });
                
            } else {
              // jQuery is not loaded
              alert("jQuery error!");
            }
         });

