using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Lista_1
{
    public partial class Form : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (IsPostBack)
            {
                String text = imie.Text + "<br />";
                text += nazwisko.Text + "<br />";
                text += wiek.Text + "<br />";
                text += email.Text + "<br />";
                text += tel.Text + "<br />";
                LabelPola.Text = text;
                LabelPola.Visible = true;
            }
        }
    }
}