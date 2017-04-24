function practice13(user_name,order_name,count_order,sale,price)
{
    let sum;
	let data={};
	let sale1=sale/100;
	sum=count_order*price*sale1;
	console.log("Уважаемый "+user_name+" Вы заказали "+order_name+" в количестве "+count_order+" со скидкой "+sale+"% ,с Вас : "+sum+" рублей");
	data["Name"]=user_name;
	data["Amount"]=sum;
for(let i in data)
{
console.log( i +data[i]);
}
}