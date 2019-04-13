<?php
//123180075
class calculate
{
	function __construct($opt1, $opt2, $opt3, $fx, $a, $b, $n)
	{
		error_reporting(0);
		$this->opt1 = $opt1;
		$this->opt2 = $opt2;
		$this->opt3 = $opt3;
		$this->fx = $fx;
		$this->a = $a; //awal
		$this->b = $b; //akhir
		$this->n = $n; //jml partisi
		$this->proses = "";
		$x = explode(" ", $this->fx);
		$this->x = $x;
		$this->h = ($this->b-$this->a)/$this->n; //lebar partisi
		$this->tt = $this->a+$this->h/2; //titik tengah pertama
		$output = array();
		$this->output = $output;
		$tit = array();
		$this->tit = $tit;
		$this->sigma;
		return $this;
	}

	public function method1()
	{
			if ($this->opt1 == "sin")
			{
				if ($this->opt3 == "+")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = sin(pow($this->char, $this->x[1]))+$this->x[2];

						array_push($this->tit, $this->tt);

						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="-")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = sin(pow($this->char, $this->x[1]))-$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="*")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = sin(pow($this->char, $this->x[1]))*$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}	

				else if($this->opt3=="/")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = sin(pow($this->char, $this->x[1]))/$this->x[2];
						
						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}			
			}



			else if ($this->opt1 == "cos")
			{
				if ($this->opt3 == "+")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = cos(pow($this->char, $this->x[1]))+$this->x[2];


						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="-")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = cos(pow($this->char, $this->x[1]))-$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="*")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = cos(pow($this->char, $this->x[1]))*$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}	

				else if($this->opt3=="/")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = cos(pow($this->char, $this->x[1]))/$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}			
			}

			else if ($this->opt1 == "tan")
			{
				if ($this->opt3 == "+")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = tan(pow($this->char, $this->x[1]))+$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="-")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = tan(pow($this->char, $this->x[1]))-$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="*")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = tan(pow($this->char, $this->x[1]))*$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}	

				else if($this->opt3=="/")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = tan(pow($this->char, $this->x[1]))/$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}			
			}

			else
			{
				if ($this->opt3 == "+")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = pow($this->char, $this->x[1])+$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="-")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = pow($this->char, $this->x[1])-$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}

				else if($this->opt3=="*")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						//operasi
						$this->fx = pow($this->char, $this->x[1])*$this->x[2];

						array_push($this->tit, $this->tt);
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}	

				else if($this->opt3=="/")
				{
					for ($r=0; $r<=$this->n-1; $r++)
					{
						
						//mengganti inputan x pada f(x) dengan titik tengah setiap partisi
						$this->char = str_replace("x", $this->tt, $this->x[0]); 

						array_push($this->tit, $this->tt);
						//operasi
						$this->fx = pow($this->char, $this->x[1])/$this->x[2];

						array_push($this->tit, $this->tt);
						
						//titik tengahnya ditambah untuk menghitung partisi selajutnya
						$this->tt += $this->h;

						array_push($this->output, $this->fx);

						//menjumlahkan nilai sigma dgn sigma sebelumnya
						$this->sigma+=$this->fx;
					}
				}			
			}			


				$l = $this->sigma*$this->h;
				$this->l = $l;			
	}

	public function proses($var, $r)
	{
		echo $this->$var[$r];
	}
}

