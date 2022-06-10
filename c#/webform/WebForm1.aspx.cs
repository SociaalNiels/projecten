using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace webform
{
    public partial class WebForm1 : System.Web.UI.Page
  
       
        {
            public static int TelOp(int button1, int button2)
            {
                return button1 + button2;
            }
            public static int Vermedigvuldig(int button1, int button2)
            {
                return button1 * button2;
            }
        }
    }


  