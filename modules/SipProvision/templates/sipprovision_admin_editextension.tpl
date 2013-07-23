{ include file="sipprovision_admin_menu.tpl" }

<h3>{gt text="Manage Extension"}</h3>

{nocache}
    {form cssClass="z-form"}
        {formvalidationsummary}
            <fieldset class="z-linear">
                <legend>{gt text="Extension Details"}</legend>

                <div class="z-formrow">
                        {formlabel for="extension" __text="Extension" mandatorysym=1}
                        {formtextinput id="extension" maxLength="5" width="5em" mandatory="1"}
                </div>

                <div class="z-formrow">
                        {formlabel for="displayname" __text="Display Name" mandatorysym=0}
                        {formtextinput id="displayname" maxLength="255" width="10em"}
                </div>

                <div class="z-formrow">
                        {formlabel for="address" __text="Address" mandatorysym=0}
                        {formtextinput id="address" maxLength="255" width="10em"}
                </div>

                <div class="z-formrow">
                        {formlabel for="authuserid" __text="Auth User ID" mandatorysym=1}
                        {formtextinput id="authuserid" maxLength="255" width="10em" mandatory="1"}
                </div>

                <div class="z-formrow">
                        {formlabel for="authpassword" __text="Auth Password" mandatorysym=1}
                        {formtextinput id="authpassword" maxLength="255" width="10em" mandatory="1" }
                </div>

                <div class="z-formrow">
                        {formlabel for="label" __text="Label" mandatorysym=1}
                        {formtextinput id="label" maxLength="255" width="10em" mandatory="1"}
                </div>

                <div class="z-buttons z-formbuttons">
                    {formbutton class='z-bt-ok' commandName='save' __text='Save'}
                    {formbutton class='z-bt-cancel' commandName='cancel' __text='Cancel' }
                </div>
        </fieldset>
        {if $id}{formtextinput textMode="hidden" id="id"}{/if}
    {/form}
{/nocache}

   