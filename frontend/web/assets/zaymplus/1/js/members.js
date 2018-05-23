
;(function (){

function rand_num(min,max) {
	var number = min + Math.floor(Math.random() * max);
	return number;
}
function numberCom(val) {
	while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1"+","+"$2");
	return val;
}



  var names = new Array("Мирослав", "Влад", "Давид", "Николай", "Дмитрий", "Артур", "Женя", "Михаил", "Максим", "Тимур", "Степан", "Иосиф", "Саша", "Виталий", "Влад", "Денис", "Евгений", "Мирон", "Леонтий", "Константин", "Василий", "Илья", "Иван", "Пётр", "Давид", "Павел", "Антон", "Потап", "Савелий", "Юрий", "Никита", "Федот", "Алекс", "Вячеслав", "Денис", "Богдан", "Георгий", "Всеволод", "Лев", "Борис", "Леонтий", "Руслан", "Платон", "Евстафий", "Роман", "Алексей", "Андрей", "Коля", "Матвей", "Артем", "Иосиф", "Лев", "Борис", "Дима","Мирослав", "Влад", "Давид", "Николай", "Эллиот", "Роман", "Тимур", "Ким", "Виктор", "Игор", "Святослав", "Назар", "Мирон", "Николас", "Варлам", "Степан", "Степан", "Саша", "Коля", "Борис", "Антон", "Василий", "Давид", "Алекс", "Захар", "Антон", "Константин", "Руслан", "Павел", "Стефан", "Мирон", "Назар", "Юрий", "Влад", "Олег", "Игор", "Коля", "Святослав", "Федот", "Захар", "Тимур", "Леонтий", "Георгий", "Евгений", "Борис", "Денис", "Виктор", "Степан", "Михаил", "Коля", "Маша", "Женя", "Ева", "Диана", "Ирина", "Елена", "Анжела", "Лиля", "Вера", "Наталья ", "Нина", "Ребекка"," Самвел", "Тамара", "Света", "Магдалина", "Вера", "Милена", "Татьяна", "Эрика", "Любовь", "Антонина", "Кира", "Полина", "Лада", "Валерия", "Марина", "Зина", "Полина", "Алла", "Элла", "Татьяна", "Мария", "Анастасия", "Алла", "Александра", "Алевтина"," Злата", "Катерина", "Ребекка", "Света", "Магдалина", "Антонина", "Жанна", "Алла", "Александра", "Катерина", "Света", "Маша", "Мария" , "Фрида", "Лиза", "Элизабет", "Жанна", "Александра", "Катерина", "Света", "Катя", "Аня", "Женя", "Кристи", "Кира","Яна", "Жанна", "Саша", "Вероника", "Ира", "Лиля", "Марина", "Кира", "Марта", "Соня", "София", "Анюта", "Элеонора", "Нелли", "Даша", "Ангелина", "Анжела", "Элеонора", "Феодора", "Людмила", "София", "Амели", "Вита", "Марфа","Яна", "Лия", "Целестина", "Саша");
var images = [

'/assets/zaymplus/1/images/users/1.jpg',  '/assets/zaymplus/1/images/users/2.jpg',  '/assets/zaymplus/1/images/users/3.jpg',  '/assets/zaymplus/1/images/users/4.jpg',  '/assets/zaymplus/1/images/users/5.jpg',  '/assets/zaymplus/1/images/users/6.jpg',
'/assets/zaymplus/1/images/users/7.jpg',  '/assets/zaymplus/1/images/users/8.jpg',  '/assets/zaymplus/1/images/users/9.jpg',  '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/11.jpg', '/assets/zaymplus/1/images/users/12.jpg',
'/assets/zaymplus/1/images/users/13.jpg', '/assets/zaymplus/1/images/users/14.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/20.jpg',
'/assets/zaymplus/1/images/users/19.jpg', '/assets/zaymplus/1/images/users/20.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/23.jpg', '/assets/zaymplus/1/images/users/24.jpg',
'/assets/zaymplus/1/images/users/25.jpg', '/assets/zaymplus/1/images/users/26.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/29.jpg', '/assets/zaymplus/1/images/users/30.jpg',
'/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/32.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/35.jpg', '/assets/zaymplus/1/images/users/36.jpg',
'/assets/zaymplus/1/images/users/50.jpg', '/assets/zaymplus/1/images/users/38.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/41.jpg', '/assets/zaymplus/1/images/users/42.jpg',
'/assets/zaymplus/1/images/users/43.jpg', '/assets/zaymplus/1/images/users/44.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/48.jpg',
'/assets/zaymplus/1/images/users/49.jpg', '/assets/zaymplus/1/images/users/50.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/54.jpg',
'/assets/zaymplus/1/images/users/55.jpg', '/assets/zaymplus/1/images/users/56.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/59.jpg', '/assets/zaymplus/1/images/users/60.jpg',
'/assets/zaymplus/1/images/users/61.jpg', '/assets/zaymplus/1/images/users/62.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/65.jpg', '/assets/zaymplus/1/images/users/66.jpg',
'/assets/zaymplus/1/images/users/67.jpg', '/assets/zaymplus/1/images/users/68.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/71.jpg', '/assets/zaymplus/1/images/users/72.jpg',
'/assets/zaymplus/1/images/users/73.jpg', '/assets/zaymplus/1/images/users/74.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/77.jpg', '/assets/zaymplus/1/images/users/78.jpg',
'/assets/zaymplus/1/images/users/79.jpg', '/assets/zaymplus/1/images/users/80.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/83.jpg', '/assets/zaymplus/1/images/users/84.jpg',
'/assets/zaymplus/1/images/users/85.jpg', '/assets/zaymplus/1/images/users/86.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/89.jpg', '/assets/zaymplus/1/images/users/90.jpg',
'/assets/zaymplus/1/images/users/91.jpg', '/assets/zaymplus/1/images/users/92.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/111.jpg', '/assets/zaymplus/1/images/users/95.jpg', '/assets/zaymplus/1/images/users/91.jpg', 
'/assets/zaymplus/1/images/users/92.jpg', '/assets/zaymplus/1/images/users/93.jpg',

'/assets/zaymplus/1/images/users/1(1).jpg',  '/assets/zaymplus/1/images/users/2(1).jpg',  '/assets/zaymplus/1/images/users/3(1).jpg',  '/assets/zaymplus/1/images/users/4(1).jpg',  '/assets/zaymplus/1/images/users/5(1).jpg',  '/assets/zaymplus/1/images/users/6.jpg',
'/assets/zaymplus/1/images/users/7(1).jpg',  '/assets/zaymplus/1/images/users/8(1).jpg',  '/assets/zaymplus/1/images/users/9(1).jpg',  '/assets/zaymplus/1/images/users/10(1).jpg', '/assets/zaymplus/1/images/users/11(1).jpg', '/assets/zaymplus/1/images/users/12.jpg',
'/assets/zaymplus/1/images/users/13(1).jpg', '/assets/zaymplus/1/images/users/14(1).jpg', '/assets/zaymplus/1/images/users/15(1).jpg', '/assets/zaymplus/1/images/users/16(1).jpg', '/assets/zaymplus/1/images/users/17(1).jpg', '/assets/zaymplus/1/images/users/18.jpg',
'/assets/zaymplus/1/images/users/19(1).jpg', '/assets/zaymplus/1/images/users/20(1).jpg', '/assets/zaymplus/1/images/users/21(1).jpg', '/assets/zaymplus/1/images/users/22(1).jpg', '/assets/zaymplus/1/images/users/23(1).jpg', '/assets/zaymplus/1/images/users/24.jpg',
'/assets/zaymplus/1/images/users/25(1).jpg', '/assets/zaymplus/1/images/users/26(1).jpg', '/assets/zaymplus/1/images/users/27(1).jpg', '/assets/zaymplus/1/images/users/28(1).jpg', '/assets/zaymplus/1/images/users/29(1).jpg', '/assets/zaymplus/1/images/users/30.jpg',
'/assets/zaymplus/1/images/users/31(1).jpg', '/assets/zaymplus/1/images/users/32(1).jpg', '/assets/zaymplus/1/images/users/33(1).jpg', '/assets/zaymplus/1/images/users/34(1).jpg', '/assets/zaymplus/1/images/users/35(1).jpg', '/assets/zaymplus/1/images/users/36.jpg',
'/assets/zaymplus/1/images/users/37(1).jpg', '/assets/zaymplus/1/images/users/38(1).jpg', '/assets/zaymplus/1/images/users/39(1).jpg', '/assets/zaymplus/1/images/users/40(1).jpg', '/assets/zaymplus/1/images/users/41(1).jpg', '/assets/zaymplus/1/images/users/42.jpg',
'/assets/zaymplus/1/images/users/43(1).jpg', '/assets/zaymplus/1/images/users/44(1).jpg', '/assets/zaymplus/1/images/users/45(1).jpg', '/assets/zaymplus/1/images/users/46(1).jpg', '/assets/zaymplus/1/images/users/47(1).jpg', '/assets/zaymplus/1/images/users/48.jpg',
'/assets/zaymplus/1/images/users/49(1).jpg', '/assets/zaymplus/1/images/users/50(1).jpg', '/assets/zaymplus/1/images/users/51(1).jpg', '/assets/zaymplus/1/images/users/52(1).jpg', '/assets/zaymplus/1/images/users/53(1).jpg', '/assets/zaymplus/1/images/users/54.jpg',
'/assets/zaymplus/1/images/users/11(1).jpg', '/assets/zaymplus/1/images/users/56(1).jpg', '/assets/zaymplus/1/images/users/57(1).jpg', '/assets/zaymplus/1/images/users/58(1).jpg', '/assets/zaymplus/1/images/users/59(1).jpg', '/assets/zaymplus/1/images/users/60.jpg',		
'/assets/zaymplus/1/images/users/61(1).jpg', '/assets/zaymplus/1/images/users/62(1).jpg', '/assets/zaymplus/1/images/users/63(1).jpg', '/assets/zaymplus/1/images/users/64(1).jpg', '/assets/zaymplus/1/images/users/65(1).jpg', '/assets/zaymplus/1/images/users/66.jpg',
'/assets/zaymplus/1/images/users/67(1).jpg', '/assets/zaymplus/1/images/users/68(1).jpg', '/assets/zaymplus/1/images/users/69(1).jpg', '/assets/zaymplus/1/images/users/70(1).jpg', '/assets/zaymplus/1/images/users/71(1).jpg', '/assets/zaymplus/1/images/users/72.jpg',
'/assets/zaymplus/1/images/users/73(1).jpg', '/assets/zaymplus/1/images/users/74(1).jpg', '/assets/zaymplus/1/images/users/75(1).jpg', '/assets/zaymplus/1/images/users/76(1).jpg', '/assets/zaymplus/1/images/users/77(1).jpg', '/assets/zaymplus/1/images/users/78.jpg',
'/assets/zaymplus/1/images/users/79(1).jpg', '/assets/zaymplus/1/images/users/80(1).jpg', '/assets/zaymplus/1/images/users/81(1).jpg', '/assets/zaymplus/1/images/users/82(1).jpg', '/assets/zaymplus/1/images/users/83(1).jpg', '/assets/zaymplus/1/images/users/84.jpg',
'/assets/zaymplus/1/images/users/85(1).jpg', '/assets/zaymplus/1/images/users/86(1).jpg', '/assets/zaymplus/1/images/users/87(1).jpg', '/assets/zaymplus/1/images/users/88(1).jpg', '/assets/zaymplus/1/images/users/89(1).jpg', '/assets/zaymplus/1/images/users/90.jpg',
'/assets/zaymplus/1/images/users/91(1).jpg', '/assets/zaymplus/1/images/users/92(1).jpg', '/assets/zaymplus/1/images/users/93(1).jpg', '/assets/zaymplus/1/images/users/94(1).jpg', '/assets/zaymplus/1/images/users/95.jpg',
'/assets/zaymplus/1/images/users/37(1).jpg' 

];
		var mas=[];
		
		function mkChanges(membImg, membName, Prof) {
			var x;
			do {
			   x=rand_num(0,names.length) 
			  }
			while (mas.indexOf(x)>-1) 
			if(mas.length>10) { mas=[]; }
			mas.push(x);
			var name=names[x];
			var img=images[x];
			var profit=rand_num(800,5000);
			if (  document.getElementById(membImg) && 
				  document.getElementById(membName) &&
				  document.getElementById(Prof)
			   ) {

			     document.getElementById(membImg).src=img;
			     document.getElementById(membName).innerHTML=name;
			     document.getElementById(Prof).innerHTML=""+profit;
		      }
		}

		function checkMember() {
			var tmpNum = rand_num(0,3);
			var membImgTmp = 'usr_img'+ tmpNum;
			var membNameTmp = 'usr_name'+tmpNum;
			var ProfTmp = 'usr_sum'+tmpNum;
            mkChanges(membImgTmp, membNameTmp, ProfTmp);
        }

        setInterval(checkMember, rand_num(2000, 3000));
        setInterval(mkChanges.bind(this, 'usrs_img', 'usrs_name', 'usrs_sum'), rand_num(4000, 6000));
})();
