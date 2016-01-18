<?php include('header.php'); ?>
<div class="box-title center-align">Анкета</div>
<div class="row">
	<div class="col s12 m10 l6 center">
		<p class="center-align box-text big-text">Заполните анкету, чтобы мы смогли связаться с вами и пригласить на собеседование.</p>
	</div>
	<div class="col l6 m10 s12 center">
		<form novalidate>
			<fieldset>
				<div class="fieldset-header"><legend>Должность</legend></div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Должность на которую вы претендуете</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Желаемый оклад</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
			</fieldset>
			<fieldset>
				<div class="fieldset-header"><legend>Персональная информация</legend></div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">ФИО</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Дата рождения</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="tel" required/>
					<label class="textfield-placeholder">Контактный телефон</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
					<div class="error-text error-pattern">Телефон должен содержать только цифры</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Наличие детей</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Автомобиль</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Категория водительского удостоверения</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
			</fieldset>
			<fieldset>
				<div class="fieldset-header"><legend>Образование и навыки</legend></div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<textarea required></textarea>
					<label class="textfield-placeholder">Учебное заведение, форма обучения, год окончания, средний бал</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<textarea required></textarea>
					<label class="textfield-placeholder">Перечислите ваши профессиональные навыки</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
			</fieldset>
			<fieldset>
				<div class="fieldset-header">
					<legend>Опыт работы</legend>
					<p class="big-text s-base">Перечислите предыдущие места работы в обратной хронологии. (От последнего к первому)</p>
				</div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Название организации, сфера деятельности</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Период работы</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Занимаемая должность</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Обязанности</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Достижения</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Причина увольнения</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Оклад</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<!-- вставить набор всех полей про работу и .counter при нажатии на кнопку -->
				<!--<div class="center-align counter">2</div>-->
				<!-- fields here -->
				<button class="center btn-add"><span class="plus">+</span> Добавить место работы</button>
			</fieldset>
			<fieldset>
				<div class="fieldset-header"><legend>Рекомендации</legend></div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">ФИО</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Организации</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Должность</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Контактный телефон</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<!-- вставить набор этих полей сюда при нажатии на кнопку -->
				<button class="center btn-add"><span class="plus">+</span> Добавить место работы</button>
			</fieldset>
			<fieldset>
				<div class="fieldset-header"><legend>Дополнительная информация</legend></div>
				<div class="error-box">Форма заполнена не верно!</div>
				<div class="field">
					<textarea required></textarea>
					<label class="textfield-placeholder">Перечислите ваши положительные и отрицательные качества</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Имеются ли у вас вредные привычки и какие?</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Имеете ли вы судимость</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">Ваше хобби</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
				<label>Знакомы ли вы с кем-то из сотрудников компании. Укажите ФИО, должность и степень знакомства.</label>
				<div class="field">
					<input type="text" required/>
					<label class="textfield-placeholder">ФИО, должность, степень знакомства</label>
					<div class="error-text error-required">*—Поле обязательно для заполнения</div>
				</div>
			</fieldset>
			<input type="submit" class="btn primary big big-width center" value="Откликнуться" />
		</form>
	</div>
</div>
<?php include('subscribe-box.php'); ?>
<?php include('footer.php'); ?>