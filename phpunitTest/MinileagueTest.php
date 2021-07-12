<?php 
    use PHPUnit\Framework\TestCase;
    

    class MinileagueTest extends TestCase{
        public function testingIfDirectoryExists(){
            define('ROOT_PATH',dirname(__DIR__).'/./');
            $this->assertDirectoryExists(ROOT_PATH.'login');
            $this->assertDirectoryExists(ROOT_PATH.'fonts');
            $this->assertDirectoryExists(ROOT_PATH.'css');
            $this->assertDirectoryExists(ROOT_PATH.'images');
        }

        public function testingIfDatabaseConnectionWorks(){
            include_once '../login/database.php';
            $database = new Database();
            $this->assertIsObject($database->getConnection());
        }

        public function testingIfPlayerClassExists(): void {
            include_once '../login/playersclass.php';
            $this->assertTrue(class_exists('Players'));
        }

        public function testingifTeamClassAttributesWork(){
            include_once '../login/teamclass.php';
            $this->assertClassHasAttribute('TeamName', Team::class);
            $this->assertClassHasAttribute('RosterSize', Team::class);            

        }

        public function testingifInstancesOfClassesCanBeCreated(): void
    {
        include_once '../login/playersclass.php';
        include_once '../login/database.php';
        $database = new Database();
         $db = $database->getConnection();
        $this->assertContainsOnlyInstancesOf(   
            Players::class,
            [new Players($db)]
        );
    }

        public function testingifQueriesReturnsanObject(){
            include_once '../login/database.php';
            include_once '../login/playersclass.php';
            include_once '../login/teamclass.php';
            $database = new Database();
            $db = $database->getConnection();
            $team = new Team($db);
            $players = new Players($db);
            $conn = $db;
            $team->Team_ID = 2;
            $this->assertIsObject($team->updateRosterSize());
            $this->assertIsObject($players->allPlayers());        
        }

    
    }

?>