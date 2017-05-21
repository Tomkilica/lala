@extends('app')


@section('content')
	<div class="cover-img">
			<img src="./local/resources/assets/img/cover3.jpg">
	</div>	
	<!-- pocinje about us el -->
	<div id="onama" class="about-us">
		<div class="box">
			<h2>O Nama</h2>
			<div class="text">
				<h5> Mi smo firma iz Srbije i Banata iz najlepšeg mesta severno od Beograda po imenu Crepaja.
					Osnovana davne 1660 godine na nekada zvanom "carskom drumu" koji je direktno vodio od Beča do Konstantinopolja
					, u delu Evrope koji je geografski i klimatski idealan za uzgoj skoro svih vrsta žitarica, voća i povrća.
					Kao sto vino moze imati geografsko poreklo tako i naša ulja imaju geografsko poreklo jer se proizvode najviše
					od biljaka proizvedenih u Crepaji, Banatu i Srbiji. Izuzetak su badem i susam koji se uvoze.
					Naš cilj će uvek biti kvalitet pa tako sastav naših ulja je isključivo 100% ulje iz semena, bez ikakvih konzervansa i
					bilo kakvih drugih dodataka, proizvedni prirodnim postupkom, ceđenjem semena, bez termičke i bez hemijske obrade.</h5>
			</div>
			<div class="text">
				<h5>Rafinisana biljna ulja koja se nalaze u prodaji su jestiva ulja podvrgnuta hemijskom tretiranju i visokim temperaturama
					kako bi bila dugotrajnija i upotrebljivija u prehrambenoj industriji, po sistemu što više ulja to veći profit, i potpuno
					su bezbedna za upotrebu u ljudskoj ishrani. Naša hladno ceđena biljna ulja drugačije se proizvode.Bez hemijske i termičke obrade,dugotrajnim postupkom i
					bez dodavanja konzervansa ili emulgatora bilo kog tipa. Potrebno je 15 dana da bi ulje iz semenke ceđeno prirodnim putem posle prolaska kroz nekoliko filtera stiglo do
					flašice ali se za ovo strpljenje dobija ulje vrhuskog kvaliteta, bogatog ukusa i mirisa.</h5>
			</div>
		</div>
	</div>
	<!--zavrsava se about us el  -->
	<!-- pocinje product el  -->
	<div id="proizvod" class="product-element">
		<div class="img-container">	
			<div class="opacity"></div>	
			<img src="./local/resources/assets/img/oil2.jpg">
			<div id="product-title" class="product-title first">
				<h2>Suncokretovo ulje</h2>
				<h6 id="more-info" class="more-info">Više o proizvodu</h6>
				<div class="text-box">
					<h6 id="img-text" class="img-text">Hladno ceđeno sucokretovo ulje naziva se još i "extra devičansko", boljeg je ukusa, sadrži više mononezasićenih masti i
						više hranljivih sastojaka. Koristi se najviše u kulinarstvu za ishrane bazirane na niskom sadržaju masti i visokom nivou
						oleinske kiseline radi smanjenja nivoa holesterola u organizmu.
						Samo hladno cedjeno ulje od suncokreta sadrži beta-karotin.
						Hladno cedjeno ulje od suncokreta sadrži i lecitin, tokoferol, karotenoide i razne vrste voska,
						a ima i više vitamina E od bilo kojeg drugog ulja (vitamin E se gubi kada se ovo ulje koristi za prženje, odnosno na visokim temperaturama).</h6>
				</div>
				<!-- <button id="button"><i class="fa fa-angle-down" aria-hidden="true"></i></button>				 -->
				<div id="arrow" class="arrow"><i id="icon" class="fa fa-angle-down icon" aria-hidden="true"></i></div>
			</div>
		</div>	
	</div>
	<!-- zavrsava product el
	<!-- ovde pocinje sl el -->
	<div class="sl-box">
		<p class="text">Mi smo Lale iz Banata i naše ulje pravimo sa svoje zemlje!</p>
		<div class="rw-box container">
			<div class="cl one">
				<div class="box">
					<h4>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						Kvalitet
					</h4>
					<h6>Naša ulja imaju geografsko poreklo jer se proizvode najviše
						od biljaka proizvedenih u Crepaji,Banatu i Srbiji.
						Naš cilj će uvek biti kvalitet.</h6>
				</div>
			</div>
			<div class="cl two">
				<div class="box">
					<h4>
						<i class="fa fa-tint" aria-hidden="true"></i>
						Prirodno
					</h4>
					<h6>Sastav naših ulja je isključivo 100% ulje iz semena, bez ikakvih konzervansa, proizvedni prirodnim postupkom,ceđenjem semena,bez termičke i hemijske obrade.</h6>
				</div>
			</div>
			<div class="cl three">
				<div class="box">
					<h4>
						<i class="fa fa-line-chart" aria-hidden="true"></i>
						Sertifikati
					</h4>
					<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
				</div>
			</div>
			<div class="cl four">
				<div class="box">
					<h4>
						<i class="fa fa-certificate" aria-hidden="true"></i>
						Iskustvo
					</h4>
					<h6>Mi smo firma iz Srbije, iz Banata osnovana davne 1660. godine. </h6>
				</div>
			</div>
		</div>
	</div>
	<!-- ppocinje product2 el -->
	<div class="product-element second">
		<div class="img-container">
			<div class="opacity"></div>	
			<img src="./local/resources/assets/img/sunflowercrop.jpg">
			<div id="product-title-second" class="product-title second">
				<h2>Terapija suncokretovim uljem</h2>
				<h6 id="more-info-second" class="more-info">Više o terapiji</h6>
				<div class="text-box">
					<h6 id="img-text-second" class="img-text">Ukrajinski doktor F. Karaš je zaslužan za uvođenje terapije hladno ceđenim suncokretovim uljem.
						Hladno ceđeno ulje od suncokreta efikasno je kod mnogih bolesti – glavobolje, bronhitisa, problema sa jetrom, zubobolje,
						tromboze, bolesti krvi, artroze, ekcema, čira na želucu, poremećaja varenja, oboljenja srca i bubrega, encefalitisa, nervoze,
						hormonskih problema kod žena… Doktor Karaš tvrdi da hladno ceđeno ulje suncokreta može da se koristi i u slučaju bolesti kao što su rak, sida, hronične infekcije.<br> Ujutro, pre doručka, na prazan stomak, uzmite kašiku ulja i mućkajte u ustima 15-20 minuta.
						Hladno ceđeno ulje suncokreta se tako meša sa pljuvačkom koja aktivira enzime koji privlače toksine iz krvi.
						Ulje od suncokreta ne smete da progutate jer je puno otrova.
						Tokom mućkanja, ulje postaje belo i razređeno, a ako je ostalo žuto znači da ga niste dovoljno mućkali.
						Posle dvadesetak minuta ispljunite ga, dobro isperite usta i operite zube.
						Posle toga dobro operite lavabo, jer ispljunuto ulje sadrži bakterije i toksičan otpad iz organizma.
						A, ako biste hladno cedjeno ulje suncokreta posle mućkanja pogledali pod jakim mikroskopom videli biste mikrobe u njihovoj prvoj fazi razvoja.</h6>
				</div>
				<!-- <button id="button"><i class="fa fa-angle-down" aria-hidden="true"></i></button>				 -->
				<div id="arrow-second" class="arrow"><i id="icon-second" class="fa fa-angle-down" aria-hidden="true"></i></div>
			</div>
		</div>
	</div>
	<!-- zavrsava se product el -->	
	<div id="contact"></div>
@endsection
