export const mutations = {
    Set_Instructions(state,response){
        state.instructions = response
    },
    Set_Subjects(state,response){
        state.subjects = response
    },
    Set_Courses(state,response){
        state.courses = response
    },
    Set_Subjects_by_Branch(state,response){
        state.subjects = response
    },
    Set_Teachers(state,response){
        state.teachers = response
    },

    Set_SubjectID(state, response){
        state.subjectId = response.sujectId
    }
}