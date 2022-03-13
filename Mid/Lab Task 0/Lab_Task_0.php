<?php
     class Student
     {
        private $ID;
        private $Name;
        private $Subject;
        private $Gender;
        private $Email;
        private $FinalSemesterGPA;
        private $FinalSemesterCreditsTaken;
        private $TotalCGPATillFinalSemester;
        private $CreditsCompletedTillFinalSemester;

        public function setID($ID)
        {
            $this->ID= $ID;
        }
        public function getID()
        {
            return $this->ID;
        }

        public function setName($Name)
        {
            $this->Name= $Name;
        }
        public function getName()
        {
            return $this->Name;
        }

        public function setSubject($Subject)
        {
            $this->Subject= $Subject;
        }
        public function getSubject()
        {
            return $this->Subject;
        }

        public function setGender($Gender)
        {
            $this->Gender= $Gender;
        }
        public function getGender()
        {
            return $this->Gender;
        }

        public function setEmail($Email)
        {
            $this->Email= $Email;
        }
        public function getEmail()
        {
            return $this->Email;
        }

        public function setFinalSemesterGPA($FinalSemesterGPA)
        {
            $this->FinalSemesterGPA= $FinalSemesterGPA;
        }
        public function getFinalSemesterGPA()
        {
            return $this->FinalSemesterGPA;
        }

        public function setFinalSemesterCreditsTaken($FinalSemesterCreditsTaken)
        {
            $this->FinalSemesterCreditsTaken= $FinalSemesterCreditsTaken;
        }
        public function getFinalSemesterCreditsTaken()
        {
            return $this->FinalSemesterCreditsTaken;
        }

        public function setTotalCGPATillFinalSemester($TotalCGPATillFinalSemester)
        {
            $this->TotalCGPATillFinalSemester= $TotalCGPATillFinalSemester;
        }
        public function getTotalCGPATillFinalSemester()
        {
            return $this->TotalCGPATillFinalSemester;
        }

        public function setCreditsCompletedTillFinalSemester($CreditsCompletedTillFinalSemester)
        {
            $this->CreditsCompletedTillFinalSemester= $CreditsCompletedTillFinalSemester;
        }
        public function getCreditsCompletedTillFinalSemester()
        {
            return $this->CreditsCompletedTillFinalSemester;
        }

        public function show()
        {
            echo '<h3><b>Student Information: </b></h3>';
            echo 'Student Name      : '.$this->getName().'<br>';
            echo 'Student ID        : '.$this->getID().'<br>';
            echo 'Student Subject   : '.$this->getSubject().'<br>';
            echo 'Student Gender    : '.$this->getGender().'<br>';
            echo 'Student Email     : '.$this->getEmail().'<br>';
            echo 'Student Final Semester GPA     : '.$this->getFinalSemesterGPA().'<br>';
            echo 'Student Final Semester Credits Taken     : '.$this->getFinalSemesterCreditsTaken().'<br>';
            echo 'Student Total CGPA Till Final Semester     : '.$this->getTotalCGPATillFinalSemester().'<br>';
            echo 'Student Credits Completed Till Final Semester     : '.$this->getCreditsCompletedTillFinalSemester().'<br>';
        }

        public function CalculateTotalCompletedCredits()
        {
            $Count = $this->getFinalSemesterCreditsTaken() + $this->getCreditsCompletedTillFinalSemester();
            echo 'Total Credit Completed :'.$Count.'<br>';
            return $Count;
        }

        /*public function CalculateFinalCGPA(GPA)
        {
            $CGPA = (GPA.($this->getFinalSemesterCreditsTaken()))/($this->getCreditsCompletedTillFinalSemester());
            echo 'Your CGPA is :'.$CGPA;
        }*/

        public function CheckStudentStatus()
        {
            if($this->GraduationEligibilityCheck()==TRUE)
            {
                echo 'Congratulation!! You are Graduated';
            }
            else
            {
                echo 'You are not Graduated Yet!';
            }
        }

        public function GraduationEligibilityCheck()
        {
            if($this->CalculateTotalCompletedCredits()== 148)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
     }

     $user = new Student();
     $user->setID('19-39968-1');
     $user->setName('Shahed');
     $user->setSubject('CSE');
     $user->setGender('Male');
     $user->setEmail('shahedislam600@gmail.com');
     $user->setFinalSemesterGPA('3.95');
     $user->setFinalSemesterCreditsTaken('15');
     $user->setTotalCGPATillFinalSemester('3.88');
     $user->setCreditsCompletedTillFinalSemester('100');

     $user->show();
     $user->CalculateTotalCompletedCredits();
     $user->CheckStudentStatus();
     //$user->CalculateFinalCGPA(3.49);
?>