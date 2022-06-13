function getBotResponse(input) {
    //rock paper scissors
    if (input == "branches") {
        return "Hi. Thank you for your message, our main branch is located at Pedro Gil St. Malate Manila.";
    } else if (input == "products") {
        return "Hi. Thank you for your message, we offer Ensaymada, Pan de Coco, Spanish Bread, Kababayan, Monay, Putok, and more. For more information please visit our website. Thank You!";
    } else if (input == "service hours?") {
        return "Hi. Thank you for message, we are open from 8:00am to 6pm from Monday to Saturday";
    }

    // Simple responses
    if (input == "how to order online?") {
        return "Hi. Thank you for your message, you can buy Cuevas products at our website. We are also available on FoodPanda, Lazada, Shopee,Grab Supermarkets.";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
	
}