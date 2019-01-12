<%@ Page Title="Formularz osobowy" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true"
    CodeBehind="Form.aspx.cs" Inherits="Lista_1.Form" %>

<asp:Content ID="Content1" ContentPlaceHolderID="HeadContent" runat="server">
    <link href="./Styles/Dane.css" rel="stylesheet" type="text/css" />
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" runat="server">
    <h1>
        Dej mie te dane człowieku</h1>

    <asp:Label ID="LabelPola" Text="" Visible="false" runat="server" />

    <label for="imie">
        Imie:
    </label>
    <asp:TextBox runat="server" ID="imie" name="imie" />
    <asp:RequiredFieldValidator runat="server" ID="req_imie" ControlToValidate="imie"
        ErrorMessage="Musisz wprowadzić imię!" />
    <br>
    <br>
    <label for="nazwisko">
        Nazwisko:
    </label>
    <asp:TextBox runat="server" ID="nazwisko" name="nazwisko" />
    <asp:RequiredFieldValidator runat="server" ID="req_nazwisko" ControlToValidate="nazwisko"
        ErrorMessage="Musisz wprowadzić nazwisko!" />
    <br>
    <br>
    <label for="wiek">
        Wiek:
    </label>
    <asp:TextBox runat="server" ID="wiek" />
    <asp:RangeValidator runat="server" ID="tng_wiek" ControlToValidate="wiek" Type="Integer"
        MinimumValue="1" MaximumValue="150" ErrorMessage="Wprowadź liczbę całkowitą z przedziału 1 - 150" />
    <br>
    <br>
    <label for="email">
        Email:
    </label>
    <asp:TextBox runat="server" ID="email" name="email" />
    <asp:RegularExpressionValidator ID="email_pattern" ErrorMessage="Nieprowaidłowy format email!"
        ControlToValidate="email" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"
        runat="server" />
    <asp:RequiredFieldValidator runat="server" ID="req_email" ControlToValidate="email"
        ErrorMessage="Musisz wprowadzić email!" />
    <br>
    <br>
    <label for="tel">
        Telefon:
    </label>
    <asp:TextBox runat="server" ID="tel" name="tel" />
    <asp:RegularExpressionValidator ErrorMessage="Numer telefonu musi być zgodny z formatem: 123 123 123"
        ControlToValidate="tel" ValidationExpression="[0-9]{3} [0-9]{3} [0-9]{3}" runat="server" />
    <br>
    <br>
    <br />
    <asp:Button runat="server" ID="btnSubmitForm" Text="Wyślij" />


    <div class="bg border-box">
        border-box
    </div>
    <div class="bg content-box">
        content-box
    </div>
    <div class="bg padding-box">
        padding-box
    </div>
    <div class="border-image slice">
    </div>
    <div class="border-image repeat">
    </div>
</asp:Content>
