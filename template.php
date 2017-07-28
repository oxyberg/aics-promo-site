<!doctype html>
<html lang="ru">
<head>

	<title><?=ORM::getMeta()['title']?></title>

	<meta charset="utf-8">
	<meta name="description" content="<?=ORM::getMeta()['description']?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="images/share_cover.png">
	<meta property="og:description" content="<?=ORM::getMeta()['description']?>">
	<meta property="twitter:description" content="<?=ORM::getMeta()['description']?>">

	<link rel="stylesheet" href="assets/skeleton.css">
	<link rel="stylesheet" href="assets/base.css">

	<link rel="icon" type="image/png" href="images/favicon.png">

	<script type="text/javascript" src="assets/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="assets/app.js"></script>

	<!-- /// SOCIAL BUTTONS /// -->
	<script type="text/javascript" src="assets/likely.js"></script>
	<link rel="stylesheet" href="assets/likely.css">

</head>
<body>

	<!-- /// LEADING /// -->
	<div class="leading">
		<div class="container">
			<h1>Кафедра автоматики<br> и компьютерных систем</h1>
			<h2>Национального исследовательского<br> Томского политехнического университета</h2>
		</div>
	</div>

	<!-- /// SPECIALITIES /// -->
	<div class="container specialities">

		<div class="one-third column">
			<h3 class="bh">Бакалавриат</h3>
			<a href="http://abiturient.tpu.ru/study/directions-list/150304.html">
				<div class="title">Автоматизация технологических процессов и производств</div>
				<div class="profile">Информационные технологии управления производственными процессами</div>
			</a>
			<a href="http://abiturient.tpu.ru/study/directions-list/090302.html">
				<div class="title">Информационные системы и технологии</div>
				<div class="profile">В бизнесе</div>
			</a>
		</div>

		<div class="one-third column">
			<h3 class="ms">Магистратура</h3>
			<a href="http://masters.tpu.ru/priemnaya-kampaniya/napravleniya-podgotovki/informatika-i-vyichislitelnaya-texnika.html">
				<div class="title">Информатика и вычислительная техника</div>
				<div class="profile">Информационное и программное обеспечение систем управления</div>
			</a>
			<a href="http://masters.tpu.ru/priemnaya-kampaniya/napravleniya-podgotovki/upravlenie-v-texnicheskix-sistemax.html">
				<div class="title">Управление в технических системах</div>
				<div class="profile">Теория систем управления</div>
			</a>
		</div>

		<div class="one-third column">
			<h3 class="ph">Аспирантура и докторантура</h3>
			<a href="http://tpu.ru/today/tpu-structure/struct-tpu/science/science-innovation-vice-rector/graduate-postgraduate-doctoral-management/postgraduate-doctoral-office/graduate/ova/after1/">
				<div class="title">Математическое и программное обеспечение вычислительных машин, комплексов и компьютерных сетей</div>
			</a>
			<a href="http://tpu.ru/today/tpu-structure/struct-tpu/science/science-innovation-vice-rector/graduate-postgraduate-doctoral-management/postgraduate-doctoral-office/graduate/ova/after1/">
				<div class="title">Системный анализ, управление и обработка информации</div>
				<div class="profile">По отраслям</div>
			</a>
		</div>

	</div>

	<!-- /// LABS /// -->
	<div class="labs">
		<div class="container">

			<div class="nav">
                <? $i = 0; foreach (ORM::getAllSlides() as $slide): ?>
				<a<? if ($i == 0) echo ' class="active"'; ?> data-name="<?=$slide['name']?>"><?=$slide['short_title']?></a>
                <? $i++; endforeach; ?>
			</div>

			<div class="slider">

                <? foreach (ORM::getAllSlides() as $slide): ?>
				<div class="content" id="<?=$slide['name']?>">
					<h2 class="title"><?=$slide['title']?></h2>
					<p><?=$slide['text']?></p>
					<span class="address">аудитория <?=$slide['room']?></span>
				</div>
                <? endforeach; ?>

			</div>

		</div>
	</div>

	<!-- /// MAP /// -->
	<div class="map">
		<div class="container heading">
			<h2 class="title">Карта аудиторий кафедры</h2>
			<h6 class="desk">Первый этаж 10-го корпуса ТПУ, правое крыло</h6>
		</div>
		<div class="tiles">
			<div class="top">

				<div class="tile" data-address="116a">
					<div class="popover">
						<div class="stroked blue">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('116a') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents blue">
						<div class="address">116 а</div>
						<div class="title">Учебная <br>аудитория</div>
					</div>
				</div>

				<div class="tile" data-address="116b">
					<div class="popover">
						<div class="stroked orange">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('116b') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents orange">
						<div class="address">116 б</div>
						<div class="title">Преподавательская</div>
					</div>
				</div>

				<div class="tile" data-address="114">
					<div class="popover">
						<div class="stroked orange">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('114') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents orange">
						<div class="address">114</div>
						<div class="title">Преподавательская</div>
					</div>
				</div>

				<div class="tile" data-address="113a">
					<div class="popover">
						<div class="stroked green">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('113a') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents green">
						<div class="address">113 а</div>
						<div class="title">Лаборатория АСУ ТП. <br>Учебная аудитория</div>
					</div>
				</div>

				<div class="tile" data-address="113b">
					<div class="popover">
						<div class="stroked green">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('113b') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents green">
						<div class="address">113 б</div>
						<div class="title">CALS-центр</div>
					</div>
				</div>

				<div class="tile" data-address="podval">
					<div class="popover">
						<div class="stroked grey">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('podval') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents grey">
						<div class="address">подвал</div>
						<div class="title">Лаборатория АСУ ТП</div>
					</div>
				</div>

				<div class="tile" data-address="103">
					<div class="popover">
						<div class="stroked orange">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('103') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents orange">
						<div class="address">103</div>
						<div class="title">Преподавательская</div>
					</div>
				</div>
			</div>

			<div class="bottom">
				<div class="tile" data-address="117b">
					<div class="popover">
						<div class="stroked blue">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('117b') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents blue">
						<div class="address">117 б</div>
						<div class="title">Учебная <br>аудитория</div>
					</div>
				</div>

				<div class="tile" data-address="117a">
					<div class="popover">
						<div class="stroked green">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('117a') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents green">
						<div class="address">117 а</div>
						<div class="title">Лаборатория <br>встраиваемой <br>техники</div>
					</div>
				</div>

				<div class="tile" data-address="115a">
					<div class="popover">
						<div class="stroked orange">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('115a') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents orange">
						<div class="address">115 а</div>
						<div class="title">Преподавательская</div>
					</div>
				</div>

				<div class="tile" data-address="112b">
					<div class="popover">
						<div class="stroked green">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('112b') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents green">
						<div class="address">112 б</div>
						<div class="title">Лаборатория <br>3D-прототипирования. <br>Преподавательская</div>
					</div>
				</div>

				<div class="tile" data-address="112a">
					<div class="popover">
						<div class="stroked orange">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('112a') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents orange">
						<div class="address">112 а</div>
						<div class="title">Преподавательская</div>
					</div>
				</div>

				<div class="tile" data-address="111">
					<div class="popover">
						<div class="stroked violet">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('111') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents violet">
						<div class="address">111</div>
						<div class="title">Завкафедры <br>А. С. Фадеев</div>
					</div>
				</div>

				<div class="double">

					<div class="tile" data-address="109">
						<div class="popover">
						<div class="stroked blue">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('109') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
						<div class="contents blue">
							<div class="address">109</div>
							<div class="title">Аудитория</div>
						</div>
					</div>

					<div class="tile" data-address="108">
						<div class="popover">
						<div class="stroked blue">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('108') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
						<div class="contents blue">
							<div class="address">108</div>
							<div class="title">Аудитория</div>
						</div>
					</div>
				</div>

				<div class="tile" data-address="107">
					<div class="popover">
						<div class="stroked blue">
							<div class="address"></div>
							<div class="title"></div>
						</div>
						<img>
                        <div class="people">
                            <? foreach (ORM::getProfsByRoom('107') as $prof): ?>
                                <?=getShrinkedName($prof)?><br />
                            <? endforeach; ?>
                        </div>
					</div>
					<div class="contents blue">
						<div class="address">107</div>
						<div class="title">Лекционная <br>аудитория</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- /// STAFF /// -->
	<div class="staff">

		<div class="container heading">
			<h2 class="title">Преподаватели кафедры</h2>
			<h6 class="desk"><?=ORM::getProfCount()?></h6>
		</div>

		<div class="container people" style="margin-top:40px">

            <? $i = 0; foreach (ORM::getAllProfs() as $prof): if ($prof['rank'] == 'phd'): ?>
			<div class="three columns">
				<div class="name"><a class="portal_link" href="<?=$prof['url']?>"><?=$prof['name']?> <?=$prof['second_name']?></a></div>
				<div class="status"><?=$prof['degree']?></div>
				<p class="bio"><?=$prof['interests']?></p>
			</div>
            <? $i++; ?>

            <? if ($i % 4 == 0): ?>
		</div>
		<div class="container people">
            <? endif; endif; ?>

            <? endforeach; ?>
        </div>


		<div class="spoiler">

			<div class="container people">

                <? $i = 0; foreach (ORM::getAllProfs() as $prof): if ($prof['rank'] == 'assistant'): ?>
    			<div class="three columns">
    				<div class="name"><a class="portal_link" href="<?=$prof['url']?>"><?=$prof['name']?> <?=$prof['second_name']?></a></div>
    				<div class="status"><?=$prof['degree']?></div>
    				<p class="bio"><?=$prof['interests']?></p>
    			</div>
                <? $i++; ?>

                <? if ($i % 4 == 0): ?>
    		</div>
    		<div class="container people">
                <? endif; endif; ?>

                <? endforeach; ?>

			</div>

		</div>

		<div class="container link">
			<a>Показать ассистентов кафедры</a>
		</div>

	</div>

	<!-- /// FOOTER /// -->
	<div class="container footer">
		<div class="likely">
			<div class="vkontakte">Поделиться</div>
			<div class="twitter">Твитнуть</div>
			<div class="facebook">Поделиться</div>
		</div>
		<p style="margin-top:20px">Кафедра автоматики и компьютерных систем</p>
		<p>10 корпус ТПУ, проспект Ленина 2</p>
		<p><a href="mailto:<?=ORM::getMeta()['email']?>"><?=ORM::getMeta()['email']?></a></p>
	</div>

</body>
</html>
<!-- Сделал Матвей Правосудов (pravosudov.com) в 2016 -->
