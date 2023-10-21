	<!-- new page  -->
	<h1>Акт № <?= $number ?> от
	___________________ г.</h1>
	<p class="censtr">оказания услуг на единице оборудования</p>

	<p class="otstup0">
	  Настоящий Акт составлен в том, что на Оборудовании, *** по Московской области,<br>
	  модель оборудования <?= $namedev ?><br>
	  показания внутренних счетчиков <?= $counterdata ?><br>
	  серийный номер(S/N) <?= $sernum ?><br>
	  инвентарный номер <?= $invennum ?><br>
	  находящемся по адресу <?= $adress ?>,
	  кабинет <?= $kabinet ?>,<br>
	  специалистами «Индивидуального предпринимателя *** Марины Вячеславовны» оказаны следующие виды услуг:</p>

	<p class="zagblok otstup0">
	  Заявленные неисправности:
	<p> <?= $repfaults ?></p>

	</p>

	<p class="zagblok otstup0">
	  Выявленные неисправности (в процессе диагностики/по ходу услуг):
	  <br>
	<p> <?= $detfaults ?></p>

	</p>

	<p class="zagblok otstup0">
	  Описание выполненных услуг:
	  <br>
	<ul>
	  <? foreach ($lstwork as $work) : ?>
	    <li><?= $work['name'] ?>
	      <?
        if ($work['type']) echo "(" . $work['type'] . ")";
        ?>
	    </li>
	  <? endforeach; ?>
	</ul>
	</p>
	<br>
	<span>После выполнения вышеуказанных услуг оборудование работает нормально, претензий и замечаний нет.</span>
	<p>
	</p>

	<i class="razdeldouble"></i>

	<br>
	<br>

	<table width="100%">
	  <tbody>
	    <tr height="50px">
	      <td width="30%">Пользователь</td>
	      <td width="40%" class="pod4erk"> </td>
	      <td> </td>
	      <td width="20%" class="pod4erk"> </td>
	    </tr>
	    <tr>
	      <td> </td>
	      <td class="censtr">(Ф.И.О.)</td>
	      <td> </td>
	      <td class="censtr"><i>(подпись)</i></td>
	    </tr>
	    <tr height="50px">
	      <td width="30%">Ответственный представитель Заказчика</td>
	      <td width="40%" class="pod4erk center"><b><?= $predstav ?></b></td>
	      <td> </td>
	      <td class="pod4erk"> </td>
	    </tr>
	    <tr>
	      <td> </td>
	      <td class="censtr">(Ф.И.О.)</td>
	      <td> </td>
	      <td class="censtr">(подпись)</td>
	    </tr>
	    <tr height="50px">
	      <td>Технический специалист Исполнителя</td>
	      <td class="pod4erk center"><b><?= $enname ?></b></td>
	      <td> </td>
	      <td class="pod4erk"> </td>
	    </tr>
	    <tr>
	      <td> </td>
	      <td class="censtr">(Ф.И.О.)</td>
	      <td> </td>
	      <td class="censtr">(подпись)</td>
	    </tr>
	  </tbody>
	</table>
	<p><!-- new page 2 --></p>
	<h1 style="page-break-before: always">
	  Заявка на оказание услуг</h1>

	<p class="censtr">№ <?= $number ?> от
  ___________________ г.
	</p>

	<p class="censtr">
	  от *** по Московской области</p>
	<p class="censtr">
	  в Индивидуальному предпринимателю *** Марине Вячеславовне<br>
	  <span class="f10">(наименование организации)<span>
	</p>

	<p class="otstup0">
	  В соответствии с условиями государственного контракта № *** г. прошу оказать услуги по обслуживанию Оборудования
	</p>
	<table width="100%" cellpadding="5" cellspacing="1" class="tablezaiavka">
	  <tbody>
	    <tr>
	      <td>№ пп</td>
	      <td>Модель оборудования</td>
	      <td>Серийный номер</td>
	      <td>Инвентарный номер</td>
	      <td>Местонахождение (адрес, корпус, кабинет)</td>
	      <td>Требуемое оказание услуг</td>
	      <td>Примечание</td>
	    </tr>
	    <tr>
	      <td>1</td>
	      <td><?= $namedev ?></td>
	      <td><?= $sernum ?></td>
	      <td><?= $invennum ?></td>
	      <td>г. Москва, <?= $adress ?>, здание <?= $zdanie ?>, каб. <?= $kabinet ?></td>
	      <td><?= $grworks ?></td>
	      <td><?= $info ?></td>
	    </tr>
	  </tbody>
	</table>
	<p> </p>

	<p>Заказ вышеперечисленных оказанных услуг подтверждаем.</p>

	<table width="100%">
	  <tbody>
	    <tr>
	      <td width="40%" height="50px">От Заказчика</td>
	      <td> </td>
	      <td width="40%">От Исполнителя</td>
	    </tr>
	    <tr>
	      <td height="40px"> </td>
	      <td> </td>
	      <td>Отв. Исполнитель</td>
	    </tr>
	    <tr>
	      <td class="pod4erk"> </td>
	      <td> </td>
	      <td class="pod4erk"> </td>
	    </tr>
	    <tr>
	      <td height="40px">(____________________________)</td>
	      <td> </td>
	      <td>(*** Марина Вячеславовна) </td>
	    </tr>
	    <tr>
	      <td><i>(подпись)</i></td>
	      <td> </td>
	      <td><i>(подпись)</i></td>
	    </tr>
	  </tbody>
	</table>
	<p> </p>