pipeline {
    agent any
    
   
    stages {
      
        stage ('build image') {
            steps {
                  
             sh 'docker build -t atec.${BUILD_ID} .'
             sh 'docker images'   
            }
        }
        
        
        
        }   
    
}
