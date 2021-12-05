using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ManejoDeImagenes
{
    public partial class Form1 : Form
    {
        int cR, cG, cB;
        int[] vector = new int[102];
        int re = 0;
        int coloresGuardados = 0;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.ShowDialog();
            Bitmap bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            int x, y, mR = 0, mG = 0, mB = 0;
            x = e.X; y = e.Y;
            for(int i = x; i < x + 10; i++){
                for (int j = y; j < y + 10; j++)
                {
                    c = bmp.GetPixel(i, j);
                    mR = mR + c.R;
                    mG = mG + c.G;
                    mB = mB + c.B;
                }
            }
            mR = mR / 100;
            mG = mG / 100;
            mB = mB / 100;
            cR = mR;
            cG = mG;
            cB = mB;
            
            textBox1.Text = cR.ToString();
            textBox2.Text = cG.ToString();
            textBox3.Text = cB.ToString();
        }


        
        private void button8_Click(object sender, EventArgs e)
        {
            //---- Mostrar TEXTURA -----------
            
            int meR, meG, meB;
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            Random colAleatorio = new Random();
            int col_R, col_G, col_B;
            int sw = 0;

            while(sw < 102)
            {
                cR = vector[sw];
                cG = vector[sw + 1];
                cB = vector[sw + 2];
                col_R = colAleatorio.Next(0, 255);
                col_G = colAleatorio.Next(0, 255);
                col_B = colAleatorio.Next(0, 255);

                for (int i = 0; i < bmp.Width - 10; i += 10)
                {
                    for (int j = 0; j < bmp.Height - 10; j += 10)
                    {
                        meR = 0;
                        meG = 0;
                        meB = 0;

                        for (int k = i; k < i + 10; k++)
                        {
                            for (int l = j; l < j + 10; l++)
                            {
                                c = bmp.GetPixel(k, l); //tomamos el color del pixel
                                meR = meR + c.R;
                                meG = meG + c.G;
                                meB = meB + c.B;
                            }
                        }
                        meR = meR / 100;
                        meG = meG / 100;
                        meB = meB / 100;

                        //cambio
                        if (cR - 10 < meR && meR < cR + 10 &&
                                cG - 10 < meG && meG < cG + 10 &&
                                cB - 10 < meB && meB < cB + 10)
                        {
                            for (int k = i; k < i + 10; k++)
                            {
                                for (int l = j; l < j + 10; l++)
                                {
                                    cpoa.SetPixel(k, l, Color.FromArgb(col_R, col_G, col_B));//cambiamos de color
                                }
                            }

                        }
                        else
                        {
                            for (int k = i; k < i + 10; k++)
                            {
                                for (int l = j; l < j + 10; l++)
                                {
                                    c = bmp.GetPixel(k, l);
                                    cpoa.SetPixel(k, l, c);//se mantiene el color
                                }
                            }

                        }
                    }
                }
                sw = sw + 3;
                bmp = cpoa;
                
            }

            
            pictureBox2.Image = cpoa;
        }

        
        private void Form1_Load(object sender, EventArgs e)
        {

        }



        private void button4_Click(object sender, EventArgs e)
        {
            //----- GUARDAR COLOR -----
            vector[re] = cR;
            vector[re + 1] = cG;
            vector[re + 2] = cB;
            re = re + 3;

            textBox1.Text = "0";
            textBox2.Text = "0";
            textBox3.Text = "0";

            coloresGuardados++;

            label7.Text = coloresGuardados.ToString();
        }

        
       
    }
}
