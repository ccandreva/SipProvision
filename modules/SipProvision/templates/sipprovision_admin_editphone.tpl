{ include file="sipprovision_admin_menu.tpl" }

<h3>{gt text="Manage Phone"}</h3>

{nocache}
    {form cssClass="z-form"}
        {formvalidationsummary}
            <fieldset class="z-linear">
                <legend>{gt text="Phone Details"}</legend>

                <div class="z-formrow">
                        {formlabel for="mac" __text="MAC Address" mandatorysym=1}
                        {formtextinput id="mac" maxLength="12" width="8em" mandatory="1"}
                </div>

                <div class="z-formrow">
                        {formlabel for="extension" __text="Extension" mandatorysym=1}
                        {formdropdownlist id="extension" width="5em" mandatory="1"}
                </div>

                <div class="z-buttons z-formbuttons">
                    {formbutton class='z-bt-ok' commandName='save' __text='Save'}
                    {formbutton class='z-bt-cancel' commandName='cancel' __text='Cancel' }
                </div>
        </fieldset>
        {if $id}{formtextinput textMode="hidden" id="id"}{/if}
    {/form}
{/nocache}

   