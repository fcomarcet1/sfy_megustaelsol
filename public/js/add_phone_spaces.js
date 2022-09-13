function addSpaces(initial){
    initial.replace("/([0-9]{3})/","\1 ");
    initial.replace("/[0-9]{2} ([0-9]{2})/","\1 ");
    return initial;
}