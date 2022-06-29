<?php
    abstract class emp{
        public $nomer;
        public $name;
        public $ttl;
        public $gender;
        public $jabatan;
        public $status;
        public $salary;

        public function __construct($nomer, $name, $ttl, $gender, $jabatan)
        {
            $this->nomer = $nomer;
            $this->name = $name;
            $this->ttl = $ttl;
            $this->gender = $gender;
            $this->jabatan = $jabatan;
        }

        abstract public function SalarySS();
    }

    class fullTime extends emp{
        public $status = 'Fulltime';

        public function SalarySS(){
            if($this->jabatan =='Junior')
            {
                $this->salary = 2000000;
                return $this->salary;
            }
            elseif ($this->jabatan=='Amateur')
            {
                $this->salary = 3500000;
                return $this->salary;
            }
            elseif($this->jabatan=='Senior')
            {
                $this->salary = 5000000;
                return $this->salary;
            }
        }
    }    

    class partTime extends emp{
            public $status = 'Parttime';
            
            public function SalarySS(){
                if($this->jabatan=='Junior')
                {
                    $this->salary = 2000000*0.5;
                    return $this->salary;
                }
                elseif ($this->jabatan=='Amateur')
                {
                    $this->salary = 3500000*0.5;
                    return $this->salary;
                }
                elseif($this->jabatan=='Senior')
                {
                    $this->salary = 5000000*0.5;
                    return $this->salary;
                }
            }
        }

        

        $emp[0] = new fullTime(1, 'Rizal Suryana', 'Tasikmalaya, Oct 22, 1988', 'Male', 'Senior', 'Full-Time');
        $emp[1] = new fullTime(2, 'Johan Sanggra', 'Bangka, June 18, 1980', 'Male', 'Junior',  'Full-Time');
        $emp[2] = new partTime(3, 'Indra Mahendra', 'Belitung, Jan 12, 1975', 'Male', 'Junior', 'Part-Time');
        $emp[3] = new partTime(4,  'Yuris Cantika', 'Bandung, Sept 19, 1992', 'Female', 'Amateur', 'Part-Time');

    
?>

<!DOCTYPE html>
<link rel="stylesheet" href="color.css">
<head>
<h1> GAJI KARYAWAN </h1>
</head>
<body>
<h2> SEBUAH PERUSAHAAN </h2>
    <table class="Table" border='15px';>
            <tr>
                <th>Nomer</th>
                <th>Name</th>
                <th>P & D O B</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Salary</th>
            </tr>

            <?php for ($x=0; $x < 4; $x++) { ?>
            
            <tr>
                <td> <?php echo $emp[$x]->nomer; ?></td>
                <td> <?php echo $emp[$x]->name; ?></td>
                <td> <?php echo $emp[$x]->ttl; ?></td>
                <td> <?php echo $emp[$x]->gender; ?></td>
                <td> <?php echo $emp[$x]->jabatan; ?></td>
                <td> <?php echo $emp[$x]->status; ?></td>
                <td> <?php echo $emp[$x]->SalarySS(); ?></td>                   
            </tr> 
            <?php } ?>
    
</body>
</html>