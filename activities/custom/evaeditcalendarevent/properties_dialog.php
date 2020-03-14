<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CUSER") ?>:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField('user', 'evaabsence_user', $arCurrentValues['evaabsence_user'], Array('rows' => 1))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CID") ?>:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField('string', 'evaabsence_id', $arCurrentValues['evaabsence_id'], Array('size'=> 50))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CNAME") ?>:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("string", 'evaabsence_name', $arCurrentValues['evaabsence_name'], Array('size'=> 50))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%" valign="top"> <?=GetMessage("EVA_PD_CDESCR") ?>:</td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("text", 'evaabsence_desrc', $arCurrentValues['evaabsence_desrc'], Array('rows'=> 7))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CFROM") ?>:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("datetime", 'evaabsence_from', $arCurrentValues['evaabsence_from'])?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CTO") ?>:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("datetime", 'evaabsence_to', $arCurrentValues['evaabsence_to'])?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field"><?=GetMessage("EVA_PD_CTYPES") ?>:</span></td>
	<td width="60%">
		<select name="evaabsence_type" id="id_evaabsence_type">
			<?
			foreach ($arAbsenceTypes as $key => $value)
			{
				?><option value="<?= $key ?>"<?= ($key == $arCurrentValues["evaabsence_type"]) ? " selected" : "" ?>><?= $value ?></option><?
			}
			?>
		</select>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><?=GetMessage("EVA_PD_CSTATE") ?>:</td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("string", 'evaabsence_state', $arCurrentValues['evaabsence_state'], Array('size'=> 50))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><?=GetMessage("EVA_PD_CFSTATE") ?>:</td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("string", 'evaabsence_finish_state', $arCurrentValues['evaabsence_finish_state'], Array('size'=> 50))?>
		<input type="hidden" name="evaabsence_site_id" value="<?= $absenceSiteId ?>">
	</td>
</tr>
